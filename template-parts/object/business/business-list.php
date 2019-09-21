<ul class="p-business__list">
	<?php
	$top_business = get_field('business_list', 8);
	if ($top_business): ?>
		<?php $i = 1; ?>
		<?php foreach ($top_business as $row) : ?>
			<li>
				<div class="background"></div>
				<h2 id="business_<?php echo $i; ?>"><?php echo $row['title']; ?><?php if($row['subtitle']) echo '<span>'.$row['subtitle'].'</span>'; ?></h2>
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
			<?php $i++; ?>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
