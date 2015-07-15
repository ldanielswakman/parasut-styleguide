<?php snippet('header') ?>

  <main>

    <section class="u-pv2 u-clearfix c-bgLightest">
      <div class="gw">
        <div class="g g-1of6">
          &nbsp;
        </div>
        <div class="g g-3of6">
          <h1 class="u-mb1 c-textDanger"><b><?php echo $page->title()->html() ?></b></h1>
          
          <?php echo $page->hero()->kirbytext() ?>
        </div>

        <?php snippet('sitemap', array('scope' => $pages->filterby( 'slug', $page->slug() ), 'colsize' => '1of6')) ?>

      </div>
    </section>

    <?php if (strlen($page->text()->kirbytext()) > 0): ?>
    <section class="u-pv3 u-clearfix">
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

    <?php
    $i = 0;
    foreach ($page->children()->visible() as $key => $chapter) :
      $i++;
      snippet('chapter', array('page' => $chapter, 'key' => $i));
    endforeach;
    ?>

  </main>

<?php snippet('footer') ?>