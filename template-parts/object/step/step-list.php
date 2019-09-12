<ul class="p-step__list">
	<?php
	$page_step = get_field('step_list', 14);
	if ($page_step): ?>
		<?php foreach ($page_step as $row) : ?>
			<li>
				<div class="background"></div>
				<h2><?php echo $row['title']; ?></h2>
				<div class="thumb">
					<?php
					$size = 'thumbnail';
					$attr = [
						'alt'   => $row['title']
					];
					echo wp_get_attachment_image($row['img']['ID'], $size, 0, $attr);
					?>
				</div>
				<div class="textarea"><?php echo $row['text']; ?></div>
			</li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
