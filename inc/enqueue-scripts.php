<?php
/**
 * Enqueue scripts and styles.
 */

function add_files()
{
	define("TEMPLATE_DIRE", get_template_directory_uri());
	define("TEMPLATE_PATH", get_template_directory());

	function wp_css($css_name, $file_path)
	{
		wp_enqueue_style($css_name, TEMPLATE_DIRE . $file_path, array(),
			date('YmdGis', filemtime(TEMPLATE_PATH . $file_path)));
	}

	function wp_script($script_name, $file_path, $bool = true)
	{
		wp_enqueue_script($script_name, TEMPLATE_DIRE . $file_path, array(),
			date('YmdGis', filemtime(TEMPLATE_PATH . $file_path)), $bool);
	}

	/*
	 * cssにタイムスタンプを付与する。
	 */
	wp_css('sunfine_template-style', '/style.css');

	/*
	 *  jsにタイムスタンプを付与する。
	 */
	wp_script('sunfine_template-navigation', '/assets/js/navigation.min.js');
	wp_script('sunfine_template-skip-link-focus-fix', '/assets/js/skip-link-focus-fix.min.js');

	/*
	 * JS圧縮ファイル
	 */
	wp_script('minified', '/assets/js/minified.min.js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'add_files', 1);
