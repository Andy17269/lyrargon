<?php
if (version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' )) {
	echo "<div style='background: #2196f3;color: #fff;font-size: 30px;padding: 50px 30px;position: fixed;width: 100%;left: 0;right: 0;bottom: 0;z-index: 2147483647;'>" . __("Lyrargon 主题不支持 Wordpress 4.4 以下版本，请更新 Wordpress", 'lyrargon') . "</div>";
}

// ========== 数据库迁移：argon_* → lyrargon_* ==========
// 旧版使用 argon_ 前缀存储选项，新版统一改为 lyrargon_。
// 此函数在主题加载时自动运行，将旧选项复制到新名称下。
function lyrargon_migrate_old_options() {
	$migrated = get_option('lyrargon_db_version');
	if (!empty($migrated)) {
		return; // 已迁移过
	}
	global $wpdb;
	$rows = $wpdb->get_results(
		"SELECT option_name, option_value FROM {$wpdb->options}
		 WHERE option_name LIKE 'argon\_%'"
	);
	$count = 0;
	foreach ($rows as $row) {
		$new_name = 'lyrargon_' . substr($row->option_name, 6);
		if (get_option($new_name) === false) {
			update_option($new_name, maybe_unserialize($row->option_value));
			$count++;
		}
	}
	$version = !(wp_get_theme() -> Template) ? wp_get_theme() -> Version : wp_get_theme(wp_get_theme() -> Template) -> Version;
	update_option('lyrargon_db_version', $version);
}
lyrargon_migrate_old_options();

function theme_slug_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	load_theme_textdomain('lyrargon', get_template_directory() . '/languages');
	// 手动语言覆盖（设置 - 全局）：强制加载对应 .mo，确保前后台都生效
	$override = get_option('lyrargon_language_override', 'follow');
	if (!empty($override) && $override != 'follow') {
		unload_textdomain('lyrargon');
		$mofile = get_template_directory() . '/languages/lyrargon-' . $override . '.mo';
		if (is_readable($mofile)) {
			load_textdomain('lyrargon', $mofile);
		}
	}
}
add_action('after_setup_theme','theme_slug_setup');

/**
 * 主题版本号访问器（替代 $GLOBALS['theme_version']）
 * 优先取父主题（子主题场景）版本，结果静态缓存以避免重复调用 wp_get_theme()。
 */
if ( ! function_exists( 'lyrargon_theme_version' ) ) {
	function lyrargon_theme_version() {
		static $version = null;
		if ( $version === null ) {
			$current = wp_get_theme();
			$version = $current->Template
				? wp_get_theme( $current->Template )->Version
				: $current->Version;
		}
		return $version;
	}
}

/**
 * 静态资源基址访问器（替代 $GLOBALS['assets_path']）
 * 支持本地、lyra-api CDN、自定义地址三种来源，结果静态缓存。
 */
if ( ! function_exists( 'lyrargon_assets_path' ) ) {
	function lyrargon_assets_path() {
		static $path = null;
		if ( $path === null ) {
			$source = get_option( 'lyrargon_assets_path' );
			switch ( $source ) {
				case 'lyrargon':
					$path = 'https://lyra-api.wenlei.top/lyrargon/v' . lyrargon_theme_version();
					break;
				case 'custom':
					$path = preg_replace( '/\/$/', '', get_option( 'lyrargon_custom_assets_path' ) );
					$path = preg_replace( '/%theme_version%/', lyrargon_theme_version(), $path );
					break;
				default:
					$path = get_bloginfo( 'template_url' );
			}
		}
		return $path;
	}
}

if ( ! function_exists( 'lyrargon_wp_path' ) ) {
	function lyrargon_wp_path() {
		$path = get_option( 'lyrargon_wp_path' );
		return $path == '' ? '/' : $path;
	}
}

// ========== 前端资源入队（统一走 wp_enqueue_scripts 钩子）==========
// 原先在 header.php / footer.php 中直接调用 wp_enqueue_*，现集中到此处，
// 便于依赖管理与条件加载；argonjs 此前在头部与尾部重复入队同一句柄，现仅入队一次并延迟到 footer。
function lyrargon_enqueue_scripts() {
	$assets = lyrargon_assets_path();
	$version = lyrargon_theme_version();

	wp_enqueue_style( 'lyrargon_css_merged', $assets . '/assets/argon_css_merged.css', array(), $version );
	wp_enqueue_style( 'font-awesome-6', $assets . '/assets/vendor/fontawesome-free-7.3.0-web/css/all.min.css', array(), '7.3.0' );
	wp_enqueue_style( 'font-awesome-v4-shims', $assets . '/assets/vendor/fontawesome-free-7.3.0-web/css/v4-shims.min.css', array(), '7.3.0' );
	wp_enqueue_style( 'style', $assets . '/style.css', array(), $version );
	if ( get_option( 'lyrargon_disable_googlefont' ) != 'true' ) {
		wp_enqueue_style( 'googlefont', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Serif+SC:300,600&display=swap' );
	}

	wp_enqueue_script( 'lyrargon_js_merged', $assets . '/assets/argon_js_merged.js', array( 'jquery' ), $version, false );
	wp_enqueue_script( 'argonjs', $assets . '/assets/js/argon.min.js', array( 'jquery' ), $version, true );
}
add_action( 'wp_enqueue_scripts', 'lyrargon_enqueue_scripts' );

//翻译 Hook
function argon_locate_filter($locate){
	if (substr($locate, 0, 2) == 'zh'){
		if ($locate == 'zh_TW'){
			return $locate;
		}
		return 'zh_CN';
	}
	if (substr($locate, 0, 2) == 'en'){
		return 'en_US';
	}
	if (substr($locate, 0, 2) == 'ru'){
		return 'ru_RU';
	}
	return 'en_US';
}
function argon_get_locate(){
	// 手动语言覆盖（设置 - 全局）：默认跟随 WordPress
	$override = get_option('lyrargon_language_override', 'follow');
	if (!empty($override) && $override != 'follow'){
		return argon_locate_filter($override);
	}
	if (function_exists("determine_locale")){
		return argon_locate_filter(determine_locale());
	}
	$determined_locale = get_locale();
	if (is_admin()){
		$determined_locale = get_user_locale();
	}
	return argon_locate_filter($determined_locale);
}
function theme_locale_hook($locate, $domain){
	if ($domain == 'lyrargon'){
		// 手动语言覆盖（设置 - 全局）：默认跟随 WordPress
		$override = get_option('lyrargon_language_override', 'follow');
		if (!empty($override) && $override != 'follow'){
			return $override;
		}
		return argon_locate_filter($locate);
	}
	return $locate;
}
add_filter('theme_locale', 'theme_locale_hook', 10, 2);

//更新主题版本后的兼容
$argon_last_version = get_option("lyrargon_last_version");
if ($argon_last_version == ""){
	$argon_last_version = "0.0";
}
if (version_compare($argon_last_version, lyrargon_theme_version(), '<' )){
	if (version_compare($argon_last_version, '0.940', '<')){
		if (get_option('lyrargon_mathjax_v2_enable') == 'true' && get_option('lyrargon_mathjax_enable') != 'true'){
			update_option("lyrargon_math_render", 'mathjax2');
		}
		if (get_option('lyrargon_mathjax_enable') == 'true'){
			update_option("lyrargon_math_render", 'mathjax3');
		}
	}
	if (version_compare($argon_last_version, '0.970', '<')){
		if (get_option('lyrargon_show_author') == 'true'){
			update_option("lyrargon_article_meta", 'time|views|comments|categories|author');
		}
	}
	if (version_compare($argon_last_version, '1.1.0', '<')){
		if (get_option('lyrargon_enable_zoomify') != 'false'){
			update_option("lyrargon_enable_fancybox", 'true');
			update_option("lyrargon_enable_zoomify", 'false');
		}
	}
	if (version_compare($argon_last_version, '1.3.4', '<')){
		switch (get_option('lyrargon_search_post_filter', 'post,page')){
			case 'post,page':
				update_option("lyrargon_enable_search_filters", 'true');
				update_option("lyrargon_search_filters_type", '*post,*page,shuoshuo');
				break;
			case 'post,page,shuoshuo':
				update_option("lyrargon_enable_search_filters", 'true');
				update_option("lyrargon_search_filters_type", '*post,*page,*shuoshuo');
				break;
			case 'post,page,hide_shuoshuo':
				update_option("lyrargon_enable_search_filters", 'true');
				update_option("lyrargon_search_filters_type", '*post,*page');
				break;
			case 'off':
			default:
				update_option("lyrargon_enable_search_filters", 'false');
				break;
		}		
	}
	update_option("lyrargon_last_version", lyrargon_theme_version());
}


//检测更新
require_once(get_template_directory() . '/theme-update-checker/plugin-update-checker.php');
$argon_update_source = get_option('lyrargon_update_source');
switch ($argon_update_source) {
	case "stop":
		break;
	case "lyra_api":
		$argonThemeUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
			'https://lyra-api.wenlei.top/theme/info.json',
			get_template_directory() . '/functions.php',
			''
		);
		break;
	case "github":
    default:
		$argonThemeUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
			'https://raw.githubusercontent.com/Andy17269/lyrargon/master/info.json',
			get_template_directory() . '/functions.php',
			''
		);
}

//初次使用时发送安装量统计信息 (数据仅用于统计安装量)
function post_analytics_info(){
	if(function_exists('file_get_contents')){
		$contexts = stream_context_create(
			array(
				'http' => array(
					'method'=>"GET",
					'header'=>"User-Agent: ArgonTheme\r\n"
				)
			)
		);
		$result = file_get_contents('http://lyra-api.wenlei.top/theme-analytics.php?domain=' . urlencode($_SERVER['HTTP_HOST']) . '&version='. urlencode(lyrargon_theme_version()), false, $contexts);
		update_option('lyrargon_has_inited', 'true');
		return $result;
	}else{
		update_option('lyrargon_has_inited', 'true');
	}
}
//if (get_option('lyrargon_has_inited') != 'true'){
//	post_analytics_info();
//}
//时区修正
if (get_option('lyrargon_enable_timezone_fix') == 'true'){
	date_default_timezone_set('UTC');
}
