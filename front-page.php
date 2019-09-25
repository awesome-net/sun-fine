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
			<div class="top-hero__cont">
				<div class="top-hero__title">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hero/top-banner-logo.svg" alt="タイトル画像：サンファイン" class="top-hero__title-pc">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hero/tb-top-banner-logo.svg" alt="タイトル画像：サンファイン" class="top-hero__title-tb">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hero/sp-top-banner-logo.svg" alt="タイトル画像：サンファイン" class="top-hero__title-sp">
				</div>

				<div class="top-hero__menu">
					<?php get_template_part('template-parts/object/home/hero-nav','pc'); ?>
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
				<div class="top-hero__copyright">
					<?php echo $hero_copyright; ?>
				</div>
		</div>
		</section>

		<section class="top-about">
			<h2>サンファインとは</h2>
			<?php get_template_part('template-parts/object/home/about', 'list'); ?>
			<?php get_template_part('template-parts/object/home/about', 'slider'); ?>
		</section>

		<section class="top-business">
			<h2>業務内容</h2>
			<?php get_template_part('template-parts/object/home/business', 'list'); ?>
		</section>

		<section class="top-blog">
			<h2>修整例</h2>
			<div class="top-blog__list">
				<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => '3',
					'no_found_rows'  => true,  //ページャーを使う時はfalseに。
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) :
					while ($the_query->have_posts()) : $the_query->the_post();
						get_template_part('template-parts/content/content', get_post_format());

					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
			<div class="top-blog__more"><a href="<?php echo home_url('/repair/'); ?>" target="" class="top-blog__button-cont">もっとみる</a></div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
