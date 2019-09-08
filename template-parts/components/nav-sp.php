<nav class="c-nav__sp">
	<button type="button" class="js-offcanvas-btn js-offcanvas-btn-left">
		<span class="sr-only">Toggle navigation</span>
		<span class="hiraku-open-btn-line"></span>
	</button>
	<div class="js-offcanvas-left">
		<?php
		$defaults = array(
			'menu'            => 'ヘッダーメニュー',
			'container'       => 'div',
			'container_class' => 'list-group',
			'fallback_cb'     => 'wp_page_menu',
		);
		wp_nav_menu( $defaults );
		?>
		<?php
		$header_tel               = get_field('header_tel', 'options');
		$header_field_tel_title   = get_field_object('header_tel','options');
		$header_business_hours    = get_field('header_business-hours', 'options');
		$header_field_business_hours_title   = get_field_object('header_business-hours','options');
		$header_contact_link               = get_field('header_contact-link', 'options');
		$header_field_contact_title   = get_field_object('header_contact-link','options');
		$header_step_link    = get_field('header_step-link', 'options');
		$header_field_step_title   = get_field_object('header_step-link','options');
		?>
		<ul class="c-nav__sp-info order-3">
			<li>
				<span class="title"><?php echo $header_field_tel_title['label']; ?></span><span class="number"><?php echo $header_tel; ?></span>
			</li>
			<li>
				<span class="title"><?php echo $header_field_business_hours_title['label']; ?></span><span class="time"><?php echo $header_business_hours; ?></span>
			</li>
			<li>
				<div><a href="<?php echo $header_contact_link; ?>"><?php echo $header_field_contact_title['label']; ?></a></div>
			</li>
			<li>
				<div><a href="<?php echo $header_step_link; ?>"><?php echo $header_field_step_title['label']; ?></a></div>
			</li>
		</ul>
	</div>
</nav><!-- #site-navigation -->
