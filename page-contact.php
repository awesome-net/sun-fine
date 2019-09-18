<?php
/**
 * Template Name: contact page
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
	<main id="main" class="site-main p-contact">
		<session class="p-contact__title">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hero/tb-top-banner-logo.svg" alt="タイトル画像：サンファイン">
		</session>

		<session class="p-contact__hero"></session>

		<section class="p-contact__form">
			<h1>お問い合わせ</h1>
			<p>お問い合わせはお電話<br>または問い合わせフォームから受付しております。</p>
			<p class="p-contact__form-tel"><span>電話.</span>079-424-3338</p>
			<?php echo do_shortcode( '[contact-form-7 id="163" title="お問い合わせ"]' ); ?>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

