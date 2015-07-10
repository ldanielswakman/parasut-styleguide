<?php snippet('header') ?>

  <section class="u-pt6 u-ph4 c-bgConfirm u-hideOverflow">
    <div class="gw">
      <div class="g g-1of3">
        <img src="assets/images/vecihi.png" alt="" class="u-pullLeft u-width15" style="margin-bottom: -80px;" />
      </div>
      <div class="g g-2of3">

        <img src="https://d1clcn8z2qe17y.cloudfront.net/production/assets/parasut-logo-d6c7ff72f97293ff81a442878a75ed7e.png" alt="" class="u-width3" />
        <h1 class="u-mt1" style="font-size: 3em;">
          This is how <a href="https://www.google.com.tr/search?q=vecihi&espv=2&biw=1317&bih=673&source=lnms&tbm=isch&sa=X&ei=UqKfVe7_M4yHyASIi6HACg&ved=0CAYQ_AUoATgK&dpr=1" class="c-textWhite" target="_blank">Vecihi</a> flies his plane
        </h1>
        <h3>Explore Paraşüt's Style Guide.</h3>
        <a href="#contents" class="u-inlineBlock">
          <i class="fa fa-angle-down fa-5x c-textWhite"></i>
        </a>

      </div>
    </div>
  </section>

  <section class="u-pv3 u-ph4 c-bgLight u-clearfix">
    <div class="gw">

      <?php foreach($pages->visible() as $p): ?>
        <?php if($p->hasVisibleChildren()): ?>

          <div class="g g-1of3">
            <a class="u-block u-mb1" href="<?php echo $p->url() ?>">
              <big><?php echo $p->title()->html() ?></big>
            </a>

            <ul>
              <?php foreach($p->children()->visible() as $p): ?>
              <li>
                <a href="<?php echo $p->url() ?>" class="u-block u-pv025"><?php echo $p->title()->html() ?></a>
              </li>
              <?php endforeach ?>
            </ul>
          </div>
        
        <?php endif ?>
      <?php endforeach; ?>

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