<?php snippet('header') ?>

  <main>

    <section class="u-ph4 u-pv2 u-clearfix">
      <div class="gw">
        <div class="g g-1of6">
          &nbsp;
        </div>
        <div class="g g-5of6">
          <h1 class="u-mb1 c-textDanger"><?php echo $page->title()->html() ?></h1>
        </div>
      </div>
    </section>

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

    <section class="u-clearfix">
      <div class="gw">
        <div class="g g-3of8 u-textRight u-pv1">
          &nbsp;
          <?php if($prev = $page->prevVisible()): ?>
          <a href="<?php echo $prev->url() ?>">
            <h3 class="c-textLight">
              <i class="fa fa-arrow-left fa-2x u-mr1"></i>
              <?php echo $prev->title(); ?>
            </h3>
          </a>
          <?php endif ?>
        </div>
        <div class="g g-2of8 u-pv2 u-textCenter">
          <a href="<?php echo $page->parent()->url() ?>">
            <i class="fa fa-arrow-up fa-2x"></i>
          </a>
        </div>
        <div class="g g-3of8 u-textLeft u-pv1">
          &nbsp;
          <?php if($next = $page->nextVisible()): ?>
          <a href="<?php echo $next->url() ?>">
            <h3 class="c-textLight">
              <?php echo $next->title(); ?>
              <i class="fa fa-arrow-right fa-2x u-ml1"></i>
            </h3>
          </a>
          <?php endif ?>
        </div>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>