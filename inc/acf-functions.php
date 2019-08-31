<?php
/**
 * Load Advanced Custom Fields functions file.
 */

/*
 * ACF Options setting.
 *
 * Doc https://www.advancedcustomfields.com/add-ons/options-page/
 */
//
//if( function_exists('acf_add_options_page') ) {
//
//	acf_add_options_page(array(
//		'page_title' 	=> '共通オプション設定',
//		'menu_title'	=> '共通オプション',
//		'menu_slug' 	=> 'theme-options',
//		'capability'	=> 'edit_posts',
//		'parent_slug'	=> '',
//		'position'	=> false,
//		'redirect'	=> false,
//	));
//
//}

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array( // 親ページ
	'page_title' 	=> '共通オプション設定', // ページタイトル
	'menu_title'	=> '共通オプション', // メニュータイトル
	'menu_slug' 	=> 'theme-general-settings', // メニュースラッグ
	'capability'	=> 'edit_posts',
	'redirect'		=> false
));
  acf_add_options_sub_page(array( // 子ページ
	'page_title' 	=> 'ヘッダー設定', // ページタイトル
	'menu_title'	=> 'ヘッダー', // メニュータイトル
	'menu_slug' 	=> 'theme-options-header',
	'capability'	=> 'edit_posts',
	'parent_slug'	=> 'theme-general-settings', // 親メニューのスラッグ
	'position'	=> false,
));
  acf_add_options_sub_page(array( // 子ページ
	'page_title' 	=> 'フッター設定', // ページタイトル
	'menu_title'	=> 'フッター', // メニュータイトル
	'menu_slug' 	=> 'theme-options-footer',
	'capability'	=> 'edit_posts',
	'parent_slug'	=> 'theme-general-settings', // 親メニューのスラッグ
	'position'	=> false,
));
  acf_add_options_sub_page(array( // 子ページ
	'page_title' 	=> 'サービス設定', // ページタイトル
	'menu_title'	=> 'サービス', // メニュータイトル
	'menu_slug' 	=> 'theme-options-service',
	'capability'	=> 'edit_posts',
	'parent_slug'	=> 'theme-general-settings', // 親メニューのスラッグ
	'position'	=> false,
));
}

/**
 * ACF JSON 保存先
 */

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

	// update path
	$path = get_stylesheet_directory() . '/acf-json';


	// return
	return $path;

}

/**
 * ACF JSON 読み込み先
 */


add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {

	// remove original path (optional)
	unset($paths[0]);


	// append path
	$paths[] = get_stylesheet_directory() . '/acf-json';


	// return
	return $paths;

}
