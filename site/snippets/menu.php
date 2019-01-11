<header>

<div class="top-bar text-center">
    <div class="container">
        <p>Organisme de formation référencé Datadock: Prise en charge sur vos budgets formation – <a href="mailto: contact@chapters.fr">contact@chapters.fr</a> – <a href="tel:0756924800">07 56 92 48 00</a></p>
    </div>
</div>

<div class="section-top">
    <div class="container">
        <div class="row">
            <div class="seven columns">
                <a href="<?= $site->url() ?>" class="logo"><h1>Chapters</h1></a>
                <div class="row">
                    <div class="six columns">
                        <p class="subtitle-one">Des coachings et formations au management pour le monde d’aujourd’hui</p>
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

                        <!--<li><a>EN</a></li>-->
                    </ul>
                </div>
                <p class="subtitle-two"><strong><em>Low tech, High Future</em></strong> → ce site a été conçu pour réduire l’empreinte environnementale du numérique </p>
            </div>
        </div>
    </div>
</div>

</header>