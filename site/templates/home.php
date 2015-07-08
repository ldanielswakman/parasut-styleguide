<?php snippet('header') ?>

  <section class="u-pt7 u-ph4 c-bgDanger u-hideOverflow">
    <img src="assets/images/vecihi.png" alt="" class="u-pullLeft u-width15" style="margin-bottom: -80px;" />
    <div class="u-pullLeft u-ml3">
      <h1 style="font-size: 3em;">
        This is how Vecihi flies his kite.
        <img src="https://d1clcn8z2qe17y.cloudfront.net/production/assets/parasut-logo-d6c7ff72f97293ff81a442878a75ed7e.png" alt="" class="u-width3" />
      </h1>
      <h3>Explore Paraşüt's Style Guide. </h3>
    </div>
  </section>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

    <?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>