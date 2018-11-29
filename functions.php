<?php
/**
 * wordpress_template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress_template
 */

if (! function_exists('wordpress_template_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wordpress_template_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on wordpress_template, use a find and replace
         * to change 'wordpress_template' to the name of your theme in all the template files.
         */
        load_theme_textdomain('wordpress_template', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'wordpress_template'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wordpress_template_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'wordpress_template_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordpress_template_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wordpress_template_content_width', 640);
}
add_action('after_setup_theme', 'wordpress_template_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordpress_template_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'wordpress_template'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'wordpress_template'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'wordpress_template_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wordpress_template_scripts()
{
	wp_enqueue_style( 'wordpress_template-style', get_stylesheet_uri(), [], filemtime( __DIR__ . '/style.css' ) );

    wp_enqueue_script('wordpress_template-navigation', get_template_directory_uri() . '/assets/js/navigation.min.js', array(), '20151215', true);

    wp_enqueue_script('wordpress_template-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true);

    wp_enqueue_script('minified', get_template_directory_uri() . '/assets/js/minified.min.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'wordpress_template_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


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

