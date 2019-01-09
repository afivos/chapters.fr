<?php $image = $item->coverimage()->toFile();
		$url = $image ? $image->url() : '/assets/images/home2.png'; ?>

<figure>
	<img src="<?= $url ?>" alt="" />
</figure>