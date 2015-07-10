<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link href="/assets/images/favicon.ico" type="image/x-icon" rel="icon" />
  <link href="/assets/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />

  <?php echo css('assets/css/main.css') ?>
  <?php echo css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
  <?php echo css('//d1clcn8z2qe17y.cloudfront.net/production/assets/parasut-f8e7f4e036c574a0d79626f1bf73c396.css') ?>

  <?php echo js('//code.jquery.com/jquery-1.11.3.min.js'); ?>
  <?php echo js('//cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.4/jquery.smooth-scroll.min.js'); ?>
  <?php echo js('assets/js/scripts.js'); ?>

</head>
<body>

  <header class="u-pa1 u-clearfix c-bgWhite u-height4 u-fullWidth">
    <a class="logo" href="<?php echo ($page->isHomePage()) ? '#top' : url() ?>">
      <img class="u-pullLeft u-width2" src="<?php echo url('assets/images/favicon.png') ?>" alt="<?php echo $site->title()->html() ?>" />
      <h1 class="u-pullLeft u-ml1 u-lineHeight30">Paraşüt Style Guide</h1>
    </a>
    <?php snippet('menu') ?>
  </header>
  <div id="top" class="headerplaceholder c-bgWhite u-height4"></div>