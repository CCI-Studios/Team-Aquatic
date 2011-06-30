<?= @helper('behavior.mootools') ?>

<? if ($params->get('show_page_title')): ?>
<h1 class="componentheading">
	<?= $params->get('page_title') ?>
</h1>
<? endif; ?>

<? foreach ($items as $client=>$files): ?>
	<div class="question"><?= $client ?></div>
	
	<div class="answer"><ul><? foreach ($files as $file): ?>
		<li><a href="<?= $path .'/'. $client .'/'. $file ?>"><?= $file ?></a></li>
	<? endforeach; ?></ul></div>
<? endforeach; ?>