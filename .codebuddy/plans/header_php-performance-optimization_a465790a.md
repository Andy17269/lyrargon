---
name: header.php-performance-optimization
overview: 将 header.php 中的内联样式和脚本迁移到 WordPress 标准入队机制，减少渲染阻塞和 HTML 体积，完全保留现有功能
todos:
  - id: add-theme-color-radius-helpers
    content: 在 inc/core.php 中新增 lyrargon_get_theme_color() 和 lyrargon_get_card_radius() 辅助函数，集中 Cookie/选项读取逻辑
    status: completed
  - id: move-css-to-inline-style
    content: 在 lyrargon_enqueue_scripts() 中用 wp_add_inline_style 注入所有条件性 CSS（主题色/圆角/毛玻璃/Banner/页背景/顶栏遮罩）
    status: completed
    dependencies:
      - add-theme-color-radius-helpers
  - id: move-js-to-inline-script
    content: 在 lyrargon_enqueue_scripts() 中用 wp_enqueue_script + wp_add_inline_script 注入 argonConfig/暗色模式/Safari 探测，平滑滚动改为 footer 加载
    status: completed
    dependencies:
      - add-theme-color-radius-helpers
  - id: simplify-header-php
    content: 精简 header.php：移除已迁移的内联 script/style 块，顶部改用 lyrargon_get_theme_color() 等 helper 函数
    status: completed
    dependencies:
      - move-css-to-inline-style
      - move-js-to-inline-script
  - id: enable-wp-body-open
    content: 启用 footer.php 中被注释的 wp_body_open()
    status: completed
---


优化 header.php 的性能和结构，要求完全不改变任何现有功能。

核心目标：
1. 将 <head> 中约 120 行的内联 <script>（argonConfig、暗色模式、Safari 探测）迁移到 WordPress 标准的 wp_add_inline_script() 注入
2. 将 </head> 与 <body> 之间以及 <body> 中的约 100 行内联 <style>（主题色变量、圆角、毛玻璃、页面背景、Banner 背景等条件性 CSS）迁移到 wp_add_inline_style() 注入
3. 将平滑滚动动态 <script src> 从 <head> 同步加载改为 footer 异步加载
4. 启用 footer.php 中被注释的 wp_body_open()，修复插件兼容性
5. header.php 从 648 行减至约 480 行，只保留：HTML 属性计算、<meta> 标签、静态导航栏骨架、Banner 骨架、搜索弹窗骨架、FAB 浮动按钮

视觉和交互效果完全不变。所有 JS 执行顺序不变。CSS 优先级不变。



## 技术栈

- WordPress PHP 主题（无新增依赖）
- 核心 API：`wp_add_inline_style()` / `wp_add_inline_script()`（WP 4.5+）
- 颜色计算函数复用 `inc/helpers.php` 中的 `hexstr2rgb`、`rgb2hsl`、`hex2gray`、`checkHEX` 等

## 实现方案

### 核心策略

将 header.php 中的内联动态内容提取到 `inc/core.php` 的 `lyrargon_enqueue_scripts()` 函数中，利用 WordPress 原生 API 在 `<head>` 中规范注入，header.php 只保留静态 HTML 骨架。

### 具体迁移对照

| 当前位置 | 内容说明 | 迁移去向 | 手法 |
|---|---|---|---|
| header.php:2-46 | `$htmlclasses` 计算 | 原位保留 | 直接在 `<html>` 标签中使用 |
| header.php:48-69 | `$themecolor` / `$cardradius` Cookie/选项计算 | 提取为 `lyrargon_get_theme_color()` / `lyrargon_get_card_radius()` 函数放在 `inc/core.php`，header.php 调用 | 函数化复用 |
| header.php:71-115 | `<meta>` / `<link>` / `wp_head()` | 原位保留 | 标准输出 |
| header.php:119-156 | `argonConfig` JS 对象 + `no-js` 移除 | `wp_add_inline_script('lyrargon_head_config', ...)` | 注册空 handle 注入 |
| header.php:157-225 | 暗色模式 JS（含立即执行） | `wp_add_inline_script('lyrargon_head_config', ...)` | 与 argonConfig 合并为一个注入调用，保持顺序 |
| header.php:226-230 | Safari 探测 JS | 合并到暗色模式脚本末尾 | 相同依赖 |
| header.php:232-240 | 平滑滚动条件加载 | `wp_enqueue_script('lyrargon_smoothscroll', ..., true)` | 改为标准入队，移到 footer |
| header.php:245-340 | 主题色/圆角/大圆角/毛玻璃 CSS | `wp_add_inline_style('lyrargon_css_merged', ...)` | 分 4 个条件性调用 |
| header.php:497-502 | Banner 背景 CSS | `wp_add_inline_style('lyrargon_css_merged', $bannerBgCss)` | 条件性，移到 <head> |
| header.php:511-561 | 页面背景 CSS（含暗色版） | `wp_add_inline_style('lyrargon_css_merged', $pageBgCss)` | 条件性，移到 <head> |
| header.php:564-581 | 顶栏遮罩 CSS | `wp_add_inline_style('lyrargon_css_merged', $toolbarMaskCss)` | 条件性，移到 <head> |
| footer.php:343 | `wp_body_open()` 注释 | 取消注释 | 修复兼容 |

### 关键技术决策

1. **JS 执行顺序保证**：`wp_add_inline_script('lyrargon_head_config', ...)` 的依赖设为 `['jquery']`，jQuery 通过 `lyrargon_js_merged.js`（同为 `false` 头部）已在 `<head>` 加载完毕，所以 `$` 安全可用。`argonConfig` 在当前顺序中位于 `lyrargon_js_merged` 之后注入，与原来相同。

2. **暗色模式不闪白（FOUC 防护）**：暗色模式中的 sessionStorage 读取和类名应用（当前 lines 176-177, 200-224）同步执行，迁移后仍在 `<head>` 中同步执行，`wp_add_inline_script` 不会改变其阻塞特性和时机，首屏前即可应用 darkmode 类名，杜绝 Flash of Unstyled Content。

3. **CSS 优先级不变**：`wp_add_inline_style('lyrargon_css_merged', $css)` 注入的 `<style>` 在 `<link href="lyrargon_css_merged.css">` 之后，与当前 `<style>` 块在 `<link>` 之后的顺序效果完全一致。

4. **Cookie 读取时机安全**：`wp_enqueue_scripts` 钩子触发时 `$_COOKIE` 已经可用，之前 header.php 顶部读取的自定义主题色/圆角现在改由 helper 函数在 `lyrargon_enqueue_scripts()` 内调用，行为不变。

5. **`lyrargon_head_config` 空 handle**：`wp_enqueue_script('lyrargon_head_config', false, ['jquery'], false, false)` 注册一个无 URL 的句柄并定位到 `<head>`（`$in_footer=false`），WordPress 不会输出空的 `<script>` 标签，只输出 `wp_add_inline_script` 添加的内联内容。

### 性能收益

- `<head>` 到 `<body>` 之间的无效 HTML 区域消除
- 内联 `<style>` 全部纳入 `wp_head()` 统一管理，符合 HTML 规范
- 平滑滚动脚本从首屏阻塞移到 footer 异步加载
- `wp_body_open()` 启用后插件兼容性提升
- header.php 行数从 648 减至约 480，维护性改善

## 架构设计

### 修改文件关系

```mermaid
flowchart TB
    A[header.php] -- 调用 --> B[lyrargon_get_theme_color()]
    A -- 调用 --> C[lyrargon_get_card_radius()]
    A -- 保持 --> D[<meta> / 导航 / Banner / FAB]
    E[inc/core.php] --> B
    E --> C
    E -- wp_add_inline_style --> F[主题色 CSS变量]
    E -- wp_add_inline_style --> G[圆角/大圆角 CSS]
    E -- wp_add_inline_style --> H[毛玻璃 CSS]
    E -- wp_add_inline_style --> I[Banner/页背景 CSS]
    E -- wp_add_inline_script --> J[argonConfig + 暗色模式 JS]
    E -- wp_enqueue_script --> K[平滑滚动 → footer]
    L[footer.php] -- 取消注释 --> M[wp_body_open()]
```

### 数据流

用户 Cookie/选项 → PHP helper 函数读取 → 生成 JS 配置对象 / CSS 变量 → 注入到 `<head>` → 浏览器执行/应用

## 目录结构

仅修改 2 个文件，不新增文件：

```
inc/
  └── core.php              # [MODIFY] lyrargon_enqueue_scripts() 中新增 inline style/script 注入逻辑
                              # 新增: lyrargon_get_theme_color(), lyrargon_get_card_radius()
                              # 新增: 平滑滚动条件入队

header.php                  # [MODIFY] 移除 119-240 行内联 <script>（移到 core.php 注入）
                              # 移除 245-340 行内联 <style>（移到 core.php 注入）
                              # 移除 497-581 行条件 <style>（移到 core.php 注入）
                              # 保留: 顶部类名计算、主题色/圆角变量（改为调用 helper）、meta 标签、骨架 HTML

footer.php                  # [MODIFY] 取消注释 wp_body_open()（第343行）
```

## 关键代码结构

### 新增辅助函数（inc/core.php）

```php
/**
 * 获取当前主题色（支持用户 Cookie 覆盖）
 */
function lyrargon_get_theme_color() {
    $themecolor = get_option('lyrargon_theme_color', '#2196f3');
    if (isset($_COOKIE['lyrargon_custom_theme_color'])
        && checkHEX($_COOKIE['lyrargon_custom_theme_color'])
        && get_option('lyrargon_show_customize_theme_color_picker') !== 'false'
    ) {
        $themecolor = $_COOKIE['lyrargon_custom_theme_color'];
    }
    return $themecolor;
}

/**
 * 获取当前卡片圆角（支持用户 Cookie 覆盖）
 */
function lyrargon_get_card_radius() {
    $cardradius = get_option('lyrargon_card_radius', '4');
    if (isset($_COOKIE['lyrargon_card_radius']) && $_COOKIE['lyrargon_card_radius'] !== '') {
        $cardradius = $_COOKIE['lyrargon_card_radius'];
    }
    return $cardradius;
}
```

### lyrargon_enqueue_scripts() 新增逻辑（inc/core.php 末尾）

关键注入顺序：
1. `wp_add_inline_style('lyrargon_css_merged', $themeColorCss)` — CSS 变量
2. `wp_add_inline_style('lyrargon_css_merged', $cardRadiusCss)` — 圆角
3. 条件性：大圆角、毛玻璃、Banner 背景、页背景、顶栏遮罩
4. 平滑滚动条件 `wp_enqueue_script`
5. `wp_enqueue_script('lyrargon_head_config', false, ['jquery'], false, false)` — 空 handle
6. `wp_add_inline_script('lyrargon_head_config', $argonConfigAndDarkModeJs)` — 内联 JS


## Agent Extensions

### SubAgent
- **code-explorer**: 用于确认 `footer.php` 中 `wp_body_open` 注释的确切行号以及 `argontheme.js` 的硬编码加载方式，辅助验证脚本迁移的安全性。
