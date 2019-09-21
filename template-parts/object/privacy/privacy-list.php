<ul class="p-privacy__list">
	<?php
	$privacy_list = get_field('privacy_list');
	if ($privacy_list): ?>
		<?php foreach ($privacy_list as $row) : ?>
			<li>
				<div class="background"></div>
				<h2><?php echo $row['title']; ?></h2>
				<ul class="textarea">
					<?php
					foreach($row['text_cont'] as $list){
						echo '<li>'.$list['text'].'</li>';
					}
					?>
				</ul>
			</li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
