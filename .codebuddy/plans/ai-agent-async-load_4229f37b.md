---
name: ai-agent-async-load
overview: 将 AI Agent JS 从 wp_enqueue_script 同步加载改为 window.load 后动态异步加载，完全不阻塞页面渲染
todos:
  - id: remove-enqueue
    content: 删除 inc/core.php 第 271-277 行的 AI Agent wp_enqueue_script + wp_localize_script 代码块
    status: completed
  - id: add-lazy-loader
    content: 在 footer.php 的 AI Agent 窗口 HTML 后添加 window.load 异步加载脚本（含 aiAgentConfig 全局变量）
    status: completed
---

将 AI Agent 的 JavaScript 从同步加载改为页面完全加载后异步动态注入，避免阻塞 DOMContentLoaded 和页面渲染，提升首屏性能。


## 技术方案

### 当前问题
`inc/core.php` 中通过 `wp_enqueue_script('lyrargon_ai_agent', ..., array('jquery'), $version, true)` 加载 ai-agent.js。虽然 `in_footer=true` 使其在尾部输出，但仍然是同步 `<script>` 标签，会阻塞 DOMContentLoaded，且会拖慢页面完全加载时间。

### 修改方案
将加载方式改为 **window.load 后异步动态注入**：

1. **删除 inc/core.php 中的 enqueue 代码块**（第 271-277 行）
2. **在 footer.php 的 AI Agent HTML 之后添加内联脚本**：
   - 直接输出 `aiAgentConfig` 全局变量（替代 `wp_localize_script`）
   - `window.addEventListener('load', function() { ... })` 等待页面完全加载
   - 使用 `document.createElement('script')` + `script.async = true` 动态创建脚本标签
   - `document.body.appendChild(script)` 注入到页面

### 关键细节
- 页面加载完成后 jQuery 必定可用，无需额外判断
- CSS 样式已属 style.css 的一部分，随主样式表正常加载，不受影响
- HTML 窗口结构在 footer.php 中原样保留，DOM 元素在 `load` 事件时已就绪
- 用户点击按钮的时间一定晚于脚本加载完成（`load` 事件通常 < 3s，用户首次交互通常在数秒后），不会出现按钮无响应的情况

### 加载时序
```mermaid
sequenceDiagram
    participant HTML as DOM 解析
    participant CSS as style.css (含 AI CSS)
    participant JS as ai-agent.js
    participant User as 用户
    
    HTML->>CSS: 正常加载
    Note over HTML,CSS: 页面正常渲染，无阻塞
    HTML->>HTML: 输出 AI Agent HTML (隐藏)
    HTML->>HTML: window.load 事件触发
    HTML->>JS: document.createElement('script async')
    JS->>JS: 脚本下载 + 执行
    Note over JS,User: 用户点击按钮时脚本已就绪
</mermaid>

### 修改文件清单
```
lyrargon/
├── inc/
│   └── core.php           # [MODIFY] 删除第 271-277 行 AI Agent enqueue 块
├── footer.php             # [MODIFY] 在浮动窗口 HTML 后添加异步加载脚本
```

