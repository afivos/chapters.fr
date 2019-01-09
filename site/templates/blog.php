<?php snippet('header-long') ?>

<main class="container container-light-grey away-from-top section-blog">

	<h3><?= $page->title()->html() ?></h3>

	<div class="row section-blog-row">
	    <?php if($articles->count()): ?>
	        <?php foreach($articles as $article): ?>
				<div class="four columns">
					<a href="<?= $article->url() ?>" class="image-overlay image-overlay-blog">
						<?php snippet('coverimage', $article) ?>
					</a>
					<a href="<?= $article->url() ?>">
						<h4><?= $article->title()->html()->excerpt(120, 'chars') ?></h4>
					</a>
					<h5>
						<!--<?php if($article->category()->isNotEmpty()): ?> -->
						<!-- we are creating a link like : http://web.com/blog?category=category-1
							 to do so, we use the str::slug helper to convert the category to a url-ready string, so: "Category 1" to "category-1"
							 -> https://getkirby.com/docs/toolkit/api/str/slug
							 then we apply the filter in controllers/blog.php -->
							<!--<a href="<?= $page->url() ?>?category=<?= str::slug($article->category()) ?>"><?= $article->category() ?></a>,
						<?php endif; ?>-->
						<?= $article->date('M Y') ?></h5>
					<p><?= $article->text()->kirbytext()->excerpt(120, 'chars') ?><a href="<?= $article->url() ?>" class="article-more"> read more</a></p>
				</div>
			<?php endforeach ?>	
		<?php else: ?>
			<p>This blog does not contain any articles yet.</p>
		<?php endif ?>
	</div>

	<?php snippet('pagination') ?>

</main>

<?php snippet('footer') ?>