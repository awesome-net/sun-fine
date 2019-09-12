<?php
/**
 * Template Name: business page
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
	<main id="main" class="site-main p-business">
		<session class="p-business__title">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hero/tb-top-banner-logo.svg" alt="タイトル画像：サンファイン">
		</session>

		<session class="p-business__hero"></session>

		<session class="p-business__cont">
			<h1>業務内容</h1>
			<?php get_template_part('template-parts/object/business/business', 'list'); ?>
			<div class="link"><a href="<?php echo home_url('/blog/'); ?>">修整例</a></div>
		</session>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

