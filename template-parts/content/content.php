<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sunfine_template
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">

		<header class="entry-header">
			<!--画像を追加-->
			<?php if( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail('thumbnail'); ?>
			<?php else: ?>
				<?php $upload_dir = wp_upload_dir(); ?>
				<img src="<?php echo $upload_dir['baseurl']; ?>/2012/01/top-blog-img-noimage.svg" alt="no-img"/>
			<?php endif; ?>

			<?php
			if ( is_front_page() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			elseif ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			$content = get_the_content('…'); // 投稿テキストを取得する
			$content = wp_strip_all_tags( $content ); // HTMLタグをすべて取り除く
			$content = strip_shortcodes( $content ); // ショートコードを取り除く
			if(mb_strlen($content, 'UTF-8') > 125){
				$content = mb_substr($content, 0, 125);
			}
			echo $content;
			?>
		</div><!-- .entry-content -->
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
