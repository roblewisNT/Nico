<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <link rel="shortcut icon" type="image/png" href="../../assets/images/favicon-01.png"/>

  <?= css('assets/css/index.css') ?>
  
  

</head>
<body>

  <header class="header" role="banner">

      <?php snippet('menu') ?>

  </header>
