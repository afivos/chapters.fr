<?php snippet('header') ?>

<main class="main-primary">

	<div class="container container-light-grey">

	<h1><?= $page->title()->html() ?></h1>
	<h3><?= $page->intro()->kirbytext() ?></h3>
	<p><?= $page->text()->kirbytext() ?></p>
	
	</div>

</main>

<?php snippet('footer') ?>