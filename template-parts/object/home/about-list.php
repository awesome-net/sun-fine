<ul class="top-about__list">
	<?php
	$about_list = get_field('explain', 32);
	if ($about_list): ?>
		<?php foreach ($about_list as $row) : ?>
			<li>
				<?php
				echo $row['text'];
				?>
			</li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
