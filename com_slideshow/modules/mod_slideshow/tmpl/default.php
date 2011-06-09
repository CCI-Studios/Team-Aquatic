<div class="mod_slideshow">
	<div class="inner">
		<? if ($params->get('title') || $params->get('description')): ?>
			<div class="details">
			<? if ($params->get('title')): ?>
				<div class="title"><?= $params->get('title') ?></div>
			<? endif; ?>
			<? if ($params->get('description')): ?>
				<div class="description"><?= $params->get('description') ?></div>
			<? endif; ?>
			</div>
		<? endif; ?>
	
		<div class="images">
			<? foreach ($images as $index=>$image): ?>
			<div class="image <?= ($index == 0)? 'current':'' ?>" 
				style="background: url(/images/stories/<?= $params->get('path') .'/'. $image?>) no-repeat;">
			</div>
			<? endforeach; ?>
		</div>
		
		<div class="clear"></div>
	</div>
	<div class="indicators">
		<? foreach ($images as $index=>$image): ?>
			<div class="indicator <?= ($index == 0)? 'current':'' ?>">&nbsp;</div>
		<? endforeach; ?>
	</div>
</div>