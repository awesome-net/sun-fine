<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sunfine_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'sunfine_template'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'sunfine_template'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}

add_action('widgets_init', 'sunfine_widgets_init');
