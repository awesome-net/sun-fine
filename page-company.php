<?php
/**
 * Template Name: company page
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
	<main id="main" class="site-main p-company">
		<session class="p-company__title">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hero/tb-top-banner-logo.svg" alt="タイトル画像：サンファイン">
		</session>

		<session class="p-company__hero"></session>

		<session class="p-company__cont">
			<h1>会社案内</h1>
			<?php get_template_part('template-parts/object/company/company', 'list'); ?>
		</session>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

