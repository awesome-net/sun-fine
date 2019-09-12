<?php
/**
 * Template Name: step page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sunfine_template
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main p-step">
		<session class="p-step__title">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hero/tb-top-banner-logo.svg" alt="タイトル画像：サンファイン">
		</session>

		<session class="p-step__hero"></session>

		<session class="p-step__cont">
			<h1>お取引の流れ</h1>
			<?php get_template_part('template-parts/object/step/step', 'list'); ?>
		</session>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

