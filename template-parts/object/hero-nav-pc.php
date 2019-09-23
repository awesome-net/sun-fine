<nav class="o-hero-nav__pc">
	<?php
	$defaults = array(
		'menu'            => 'ヒーロー画像メニュー',
		'container'       => 'div',
		'container_class' => 'list-group',
		'fallback_cb'     => 'wp_page_menu',
	);
	wp_nav_menu( $defaults );
	?>
</nav>
