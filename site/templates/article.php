<?php snippet('header-long') ?>

	<main>

	<div class="container">
		<article class="section-blogpost away-from-top">

			<!--
			<div class="section-blogpost-categories">
				<h4>
					<?php $i = 0; foreach($categories as $category): $i++; ?>

					<a class="<?php e($category == $currentCategory, 'active-link'); ?>" href="../blog?category=<?= str::slug($category); ?>"><?php echo $category; ?></a>
					<?php e(count($categories) != $i, ' | '); ?>
					<?php endforeach; ?>

				</h4>
			</div>
		-->

			<div class="row blogpost-heading">
				<div class="twelve columns">
					<h1><?= $page->title()->html() ?></h1>
				</div>				
			</div>

			<div class="row blogpost-image">
				<div class="twelve columns">
					<div class="image-overlay image-overlay-blogpost">
						<?php snippet('coverimage', $page) ?>
					</div>
				</div>
			</div>

			<div class="blogpost-body">
				<?= $page->text()->kirbytext() ?>
			</div>
			
		</article>
	</div>

	</main>

<div class="blogpost-meta">
	<div class="blogpost-meta-row blogpost-meta-border">
		<p class="text-right"><?= $page->date('l F jS Y') ?><?php e($page->author()->isNotEmpty(), ' by ') ?><?= $page->author() ?></p>
	</div>

	<div class="blogpost-meta-row section-blog">

		<div class="row section-blog-row">
			<?php $articles = $page->related()->pages(','); ?>
			<?php $articles = $blog->children()->filterBy('category', $currentCategory)->not($page)->flip()->limit(3); ?>

			    <?php if($articles->count()): ?>
					<h3 class="text-center">Related posts</h3>
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
								<?= $article->date('F Y') ?></h5>
							<p><?= $article->text()->kirbytext()->excerpt(120, 'chars') ?><a href="<?= $article->url() ?>" class="article-more"> voir plus</a></p>
						</div>
					<?php endforeach ?>
				<?php else: ?>
					<!--<p class="text-center">There are no related posts.</p>-->
				<?php endif ?>

		</div>
	</div>

	<!--
	<div class="blogpost-meta-row blogpost-meta-border">
		<div class="row">
			<div class="six columns">
				<p>article suivant</p>
			</div>
			<div class="six columns">
				<p class="text-right">article précédent</p>
			</div>
		</div>
	</div>
	-->

</div>

<?php snippet('footer') ?>