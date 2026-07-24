<?php
//Gutenberg 编辑器区块
function argon_init_gutenberg_blocks() {
	$dist = get_template_directory();
	wp_register_script(
		'argon-gutenberg-block-js',
		lyrargon_assets_path().'/gutenberg/dist/blocks.build.js',
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-block-editor', 'wp-components'),
		filemtime($dist . '/gutenberg/dist/blocks.build.js'),
		true
	);
	wp_register_style(
		'argon-gutenberg-block-backend-css',
		lyrargon_assets_path().'/gutenberg/dist/blocks.editor.build.css',
		array('wp-edit-blocks'),
		filemtime($dist . '/gutenberg/dist/blocks.editor.build.css')
	);
	// 区块前端样式（在前台渲染区块时由 WordPress 自动入队）
	wp_register_style(
		'argon-gutenberg-block-frontend-css',
		lyrargon_assets_path().'/gutenberg/dist/blocks.style.build.css',
		array(),
		filemtime($dist . '/gutenberg/dist/blocks.style.build.css')
	);
	register_block_type(
		'argon/argon-gutenberg-block', array(
			'style'         => 'argon-gutenberg-block-frontend-css',
			'editor_script' => 'argon-gutenberg-block-js',
			'editor_style'  => 'argon-gutenberg-block-backend-css',
		)
	);

	// 让区块编辑器 JS 使用主题文本域 lyrargon 的翻译
	if ( function_exists( 'wp_set_script_translations' ) ) {
		wp_set_script_translations( 'argon-gutenberg-block-js', 'lyrargon', $dist . '/languages' );
	}

	function argon_render_gutenberg_shortcode_block($attributes, $content, $block) {
		$block_name = str_replace('argon/', '', $block->name);
		if ($block_name == 'sfriendlinks') {
			return shortcode_friend_link_simple($attributes);
		} else if ($block_name == 'friendlinks') {
			return shortcode_friend_link($attributes);
		} else if ($block_name == 'video') {
			return shortcode_video($attributes);
		}
		return '';
	}

	register_block_type('argon/friendlinks', array('render_callback' => 'argon_render_gutenberg_shortcode_block', 'style' => 'argon-gutenberg-block-frontend-css'));
	register_block_type('argon/sfriendlinks', array('render_callback' => 'argon_render_gutenberg_shortcode_block', 'style' => 'argon-gutenberg-block-frontend-css'));
	register_block_type('argon/video', array('render_callback' => 'argon_render_gutenberg_shortcode_block', 'style' => 'argon-gutenberg-block-frontend-css'));
}
add_action('init', 'argon_init_gutenberg_blocks');

// 前端渲染时入队区块样式，覆盖以 JS 注册的区块（其样式在构建产物中声明）
function lyrargon_gutenberg_enqueue_frontend_styles() {
	if ( is_admin() || ! is_singular() ) {
		return;
	}
	wp_enqueue_style('argon-gutenberg-block-frontend-css');
}
add_action('wp_enqueue_scripts', 'lyrargon_gutenberg_enqueue_frontend_styles');

function argon_enqueue_extra_blocks() {
	wp_enqueue_script(
		'argon-gutenberg-extra-blocks-js',
		lyrargon_assets_path().'/gutenberg/dist/extra-blocks.js',
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-server-side-render', 'argon-gutenberg-block-js' ),
		filemtime(get_template_directory() . '/gutenberg/dist/extra-blocks.js'),
		true
	);
}
add_action('enqueue_block_editor_assets', 'argon_enqueue_extra_blocks');

function argon_add_gutenberg_category($block_categories, $editor_context) {
	if (!empty($editor_context->post)){
		array_push(
			$block_categories,
			array(
				'slug'  => 'lyrargon',
				'title' => 'Lyrargon',
				'icon'  => null,
			)
		);
	}
	return $block_categories;
}
add_filter('block_categories_all', 'argon_add_gutenberg_category', 10, 2);
function argon_admin_i18n_info(){
	echo "<script>var argon_language = '" . argon_get_locate() . "';</script>";
}
add_filter('admin_head', 'argon_admin_i18n_info');
