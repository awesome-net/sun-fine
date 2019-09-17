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
						if($list['text_1']) echo '<li>'.$list['text_1'].'</li>';
						if($list['text_2']) echo '<li>'.$list['text_2'].'</li>';
						if($list['text_3']) echo '<li>'.$list['text_3'].'</li>';
						if($list['text_4']) echo '<li>'.$list['text_4'].'</li>';
					}
					?>
				</ul>
			</li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
