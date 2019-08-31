<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sunfine_template
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="top-hero">

			<div class="top-hero__title">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/" alt="タイトル画像：サンファイン">
			</div>

			<div class="top-hero__menu">
				<?php get_template_part('template-parts/object/hero-nav','pc'); ?>
			</div>

			<?php
			$hero_tel               = get_field('hero_tel', 'options');
			$hero_field_tel_title   = get_field_object('hero_tel','options');
			$hero_business_hours    = get_field('hero_business-hours', 'options');
			$hero_field_business_hours_title   = get_field_object('hero_business-hours','options');
			?>
			<ul class="top-hero__info">
				<li>
					<?php echo $hero_field_tel_title['label']; ?>･･<?php echo $hero_tel; ?>
				</li>
				<li>
					<?php echo $hero_field_business_hours_title['label']; ?>･･<?php echo $hero_business_hours; ?>
				</li>
			</ul>

			<?php
			$hero_copyright        = get_field('copyright', 'options');
			?>
			<div class="top-hero_copyright">
				<?php echo $hero_copyright; ?>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
