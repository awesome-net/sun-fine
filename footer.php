<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunfine_template
 */

?>


<footer class="l-footer">
	<div class="l-footer__link">
		<a href="<?php echo home_url('/step/'); ?>">お取引の流れ</a>
		<a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
	</div>

	<div class="l-footer__map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.813187399966!2d134.86822211522707!3d34.73510298042569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d7bd6aa51d53%3A0x8ec178d3f1dc75a4!2z44CSNjc1LTAxMTIg5YW15bqr55yM5Yqg5Y-k5bed5biC5bmz5bKh55S65bGx5LmL5LiK77yW77yR77yR!5e0!3m2!1sja!2sjp!4v1566992854540!5m2!1sja!2sjp" width="100%" height="325" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>

	<div class="l-footer__cont">
		<div class="l-footer__cont-info">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer/footer-logo.svg" alt="タイトル画像：サンファイン">
			<div class="l-footer__cont-info--address">
				〒675-0112 兵庫県加古川市平岡町山之上６１１
			</div>
			<div class="l-footer__cont-info--tel">
				<span>電話.</span>079-424-3338
			</div>
		</div>

		<div class="l-footer__cont-menu">
			<?php get_template_part('template-parts/object/footer-nav'); ?>
		</div>
	</div>

	<div class="l-footer__copyright">
		<div>Copyright Sun fine. All Rights Reserved.</div>
	</div>

	<div class="l-footer__scroll-button">
		<a id="scroll_top" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer/reel-top-normal.svg" alt="アイコン：トップへ戻る"></a>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
