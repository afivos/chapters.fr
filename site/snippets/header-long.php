<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- Fonts, then styles -->
  <?= css('assets/fonts/stylesheet.css') ?>
  <?= css('assets/css/main.css') ?>

</head>
<body>

<article class="contains-all">

  <?php snippet('menu-long') ?>