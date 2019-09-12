<ul class="top-business__list">
	<?php
	$top_business = get_field('business', 32);
	if ($top_business): ?>
		<?php foreach ($top_business as $row) : ?>
			<li>
				<h3><?php echo $row['title']; ?><?php if($row['subtitle']) echo '<span>'.$row['subtitle'].'</span>'; ?></h3>
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
