<ul class="p-company__list">
	<?php
	$page_company = get_field('company_list', 12);
	if ($page_company): ?>
		<?php $i = 1; ?>
		<?php foreach ($page_company as $row) : ?>
			<li>
				<h2><?php echo $row['title']; ?></h2>
				<div class="textarea">
					<?php if($i == 6){ ?>
						<a href="mailto:<?php echo $row['text']; ?>"><?php echo $row['text']; ?></a>
					<?php }else{ ?>
						<?php echo $row['text']; ?>
					<?php } ?>
				</div>
			</li>
		<?php $i++; ?>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
