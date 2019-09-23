<div class="js-about__slider">
	<?php
	$about_slider = get_field('slider_pc', 32);
	if ($about_slider): ?>
		<?php foreach ($about_slider as $row) : ?>
			<div class="js-about__slider-card">
				<?php
				$size = 'medium';
				echo wp_get_attachment_image($row['img']['ID'], $size, 0);
				?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
