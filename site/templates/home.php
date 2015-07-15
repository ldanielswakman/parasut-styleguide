<?php snippet('header') ?>

<main>

  <section class="u-pt6 u-ph4 c-bgConfirm u-hideOverflow">
    <div class="gw">
      <div class="g g-1of3">
        <img src="assets/images/vecihi.png" alt="" class="u-pullLeft u-width15" style="margin-bottom: -80px;" />
      </div>
      <div class="g g-2of3">

        <?php echo $page->hero()->kirbytext() ?>

      </div>
    </div>
  </section>

  <section id="contents" class="u-pv3 u-ph4 c-bgLight u-clearfix">
    <div class="gw">

      <div class="g g-1of3 u-height5">

        <h4>MOST RECENT CHANGES</h4>
        <?php
        // showing 5 most recently changed pages
        foreach ($pages->index()->visible()->sortBy('modified', 'DESC')->limit(5) as $p):
        $url = (strlen($p->parent()) > 0) ? $p->parent()->url() . '#' . $p->slug() : $p->url();
        ?>
        <a href="<?php echo $url ?>" class="u-block u-mv05">
          <?php echo $p->title() ?>
          <br />
          <span class="c-textLight">
            <small>
              (<?php echo $p->modified('d M Y, H:i') ?>)
            </small>
          </span>
        </a>
        <?php endforeach ?>

      </div>

      <?php snippet('sitemap', array('colsize' => '1of6')) ?>

    </div>
  </section>

  <section id="contents" class="u-pv3 u-ph4 u-clearfix">
    <div class="gw">

      <div class="g g-1of3 u-height5">
      </div>

      <?php echo $page->text()->kirbytext() ?>

    </div>
  </section>

  <?php // snippet('projects') ?>

</main>

<?php snippet('footer') ?>
