<nav class="c-nav__pc order-1">
	<?php
	$defaults = array(
		'menu'            => 'ヘッダーメニュー',
		'container'       => 'div',
		'container_class' => 'list-group',
		'fallback_cb'     => 'wp_page_menu',
	);
	wp_nav_menu( $defaults );
	?>
</nav>
