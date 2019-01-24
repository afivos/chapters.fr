<?php snippet('header-long') ?>

<div class="container image-overlay image-overlay-home">
    <figure class="hidden-xs">

<?php
// try to get an image object
$image = $page->mainImg()->toFile();
// check if image exists
if($image): ?>
<img src="<?php echo $image->url(); ?>" alt="">
<?php endif ?>

    </figure>
</div>

<div class="container section-set text-center">
    <div class="row">
        <div class="four columns section section-grey">
            <?= $page->feature1()->kirbytext() ?>
        </div>
        <div class="four columns section section-orange-light">
            <?= $page->feature2()->kirbytext() ?>
        </div>
        <div class="four columns section section-grey">
            <?= $page->feature3()->kirbytext() ?>
        </div>
    </div>
</div>

<div class="container section-with-dots">
    <div class="row ">
        <div class="one columns">
            <span class="dot dot-left"></span>
        </div>
        <div class="ten columns text-center">
            <?= $page->heading1()->kirbytext() ?>
        </div>
        <div class="one columns text-right">
            <span class="dot dot-right"></span>
        </div>
    </div>
</div>

<div class="container-image container-image-paris">
    <div class="container">
        <div class="row">
            <div class="six columns section section-grey">
                <?= $page->list1()->kirbytext() ?>
            </div>
            <div class="six columns section section-orange">
                <?= $page->list2()->kirbytext() ?>
            </div>
        </div>
        <div class="row">
            <div class="six columns section section-grey visible-sm">
                <?= $page->list3()->kirbytext() ?>
            </div>
            <div class="six columns section section-orange">
                <?= $page->list4()->kirbytext() ?>
            </div>
            <div class="six columns section section-grey hidden-sm">
                <?= $page->list3()->kirbytext() ?>
            </div>
        </div>
    </div>
</div>

<div class="container section-with-dots">
    <div class="row ">
        <div class="one columns">
            <span class="dot dot-left"></span>
        </div>
        <div class="ten columns text-center">
            <?= $page->heading2()->kirbytext() ?>
        </div>
        <div class="one columns text-right">
            <span class="dot dot-right"></span>
        </div>
    </div>
</div>

<div class="container-dark section-logos-testimonials">
    <div class="container hidden-sm">
        <h1>Ils nous font confiance :</h1>
        <div class="row text-center">
        <?php
        $partners = $page->partners()->toStructure();
        foreach($partners as $partner): ?>
            <div class="three columns">
                <img src="<?php echo $partner->image()->toFile()->url() ?>">
            </div>
        <?php endforeach ?>
        </div>
    </div>
    <div class="container">
        <hr>
        <h1>Quelques mots de nos clients :</h1>
        <div class="row">
            <!---------------------
                <?php foreach($page->testimonials()->toStructure() as $testimonial): ?>
                <div class="seven columns">
                  <?= $testimonial->text()->kirbytext() ?>
                </div>
                <?php endforeach ?>
            ----------------------->
            <div class="six columns">
                <?= $page->testimonial1()->kirbytext() ?>
            </div>
            <div class="six columns">
                <?= $page->testimonial2()->kirbytext() ?>
            </div>
        </div>
        <div class="row">
            <div class="six columns">
                <?= $page->testimonial3()->kirbytext() ?>
            </div>
            <div class="six columns">
                <?= $page->testimonial4()->kirbytext() ?>
            </div>
        </div>
    </div>
</div>

<div class="container-image container-image-people">
    <div class="container">
        <div class="section section-orange">
            <?= $page->list5()->kirbytext() ?>
        </div>
    </div>
</div>

<?php snippet('footer') ?>