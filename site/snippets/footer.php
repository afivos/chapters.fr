<footer class="container-dark footer">
    <div class="container">
        <div class="row">
            <div class="three columns">
                <h1><a href="<?= $site->url() ?>"><?= $site->siteName()->text() ?></a></h1>
                <p><strong><?= $site->footerSubtitle()->text() ?></strong></p>
            </div>
            <div class="three columns">
                <p><?= $site->headquartersTitle()->text() ?>
                    <br><?= $site->headquartersAddress()->text() ?></p>
                <p><?= $site->officeTitle()->text() ?>
                    <br><?= $site->officeAddress()->text() ?></p>
            </div>
            <div class="three columns">
                <p><?= $site->emailTitle()->text() ?>
                    <br><a href="mailto: <?= $site->email()->text() ?>"><?= $site->email()->text() ?></a></p>
                <p><?= $site->social()->text() ?>
                    <br><a href="<?= $site->twitter() ?>">twitter</a>
                    <br><a href="<?= $site->linkedin() ?>">linkedin</a></p>
            </div>
            <div class="three columns">
                <p><a href="<?= $site->url() ?>/mentions-legales">
                    <?= $site->legalTitle()->text() ?>
                </a></p>
            </div>
        </div>
    </div>
</footer>

</article>

</body>
</html>