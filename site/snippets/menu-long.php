<header>

<div class="top-bar text-center">
    <div class="container">
        <p><?= $site->topBarText()->text() ?> – <a href="mailto: <?= $site->email()->text() ?>"><?= $site->email()->text() ?></a> – <a href="tel:<?= $site->telephone()->text() ?>"><?= $site->telephone()->text() ?></a></p>
    </div>
</div>

<div class="section-top section-top-long">
    <div class="container">
        <div class="row">
            <div class="seven columns">
                <a href="<?= $site->url() ?>" class="logo"><h1><?= $site->siteName()->text() ?></h1></a>
                <div class="row">
                    <div class="six columns">
                        <p class="subtitle-one">
                            <?= $site->headerSubtitle()->text() ?>
                        </p>
                    </div>
                    <div class="six columns">
                        <img src="/assets/images/datadock.png">
                    </div>
                </div>
            </div>
            <div class="five columns">
                <div class="navbar">
                    <ul>
                        <?php foreach($pages->visible() as $item): ?>
                            <li><a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
                        <?php endforeach ?>
                        <?php foreach($site->languages() as $language): ?>
                            <li<?php e($site->language() == $language, ' class="active"') ?>>
                              <a href="<?= $page->url($language->code()) ?>" class="language-switcher">
                                <?= html($language->code()) ?>
                              </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <p class="subtitle-two"><strong><em>Low tech, High Future</em></strong> → 
                    <?= $site->lowtechhighfuture()->text() ?>
                </p>
            </div>
        </div>
    </div>
</div>

</header>