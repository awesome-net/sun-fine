<?php
/**
 * Template Name: repair page
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
	<main id="main" class="site-main p-repair">
		<session class="p-repair__title">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/hero/tb-top-banner-logo.svg" alt="タイトル画像：サンファイン">
		</session>

		<session class="p-repair__hero"></session>

		<section class="p-repair__cont">
			<h1>修整例</h1>
			<div class="p-repair__list">
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
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

