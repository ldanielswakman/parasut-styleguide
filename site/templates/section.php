<?php snippet('header') ?>

  <main>

    <section class="u-ph4 u-pv2 u-clearfix">
      <div class="gw">
        <div class="g g-1of6">
          &nbsp;
        </div>
        <div class="g g-5of6">
          <h1 class="u-mb1 c-textDanger"><?php echo $page->title()->html() ?></h1>
          
          <?php echo $page->hero()->kirbytext() ?>
        </div>
      </div>
    </section>

    <?php if (strlen($page->text()->kirbytext()) > 0): ?>
    <section class="u-ph4 u-pv3 u-clearfix">
      <div class="gw">
        <div class="g g-1of6">
          &nbsp;
        </div>
        <div class="g g-5of6">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </div>
    </section>
    <?php endif ?>

    <section id="contents" class="u-pv3 u-ph4 u-clearfix c-bgDark">
      <div class="gw">

        <div class="g g-1of6 u-height5">
        </div>

        <?php snippet('sitemap', array('scope' => $pages->filterby( 'slug', $page->slug() ), 'colsize' => '1of6')) ?>

      </div>
    </section>

  </main>

<?php snippet('footer') ?>