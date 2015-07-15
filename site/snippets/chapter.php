<?php 
$bgs = array('c-bgLighter', 'c-bgLight', 'c-bg', 'c-bgDark', 'c-bgDarker', 'c-bgDarkest', '');
?>
<section id="<?php echo $page->slug() ?>" class="u-pv3 u-clearfix <?php echo $bgs[$key] ?>">
  <div class="gw">

    <div class="g g-1of6 u-height5">
    </div>

    <div class="g g-5of6">
      <h2 class="u-mb2">
          <?php echo $page->title() ?>
      </h2>

      <?php echo $page->text() ?>
    </div>
  </div>


</section>