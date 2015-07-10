<?php 
// fallback for snippet arguments
if(empty($scope)) { $scope = $pages; }
if(empty($colsize)) { $colsize = '1of4'; }

foreach($scope->visible() as $p):
  if($p->hasVisibleChildren()):
?>

  <div class="g g-<?php echo $colsize ?>">

    <?php if($p != $page): ?>
    <a class="u-block u-mb1" href="<?php echo $p->url() ?>">
      <big><?php echo $p->title()->html() ?></big>
    </a>
    <?php endif ?>

    <ul>
      <?php foreach($p->children()->visible() as $p): ?>
      <li>
        <a href="<?php echo $p->url() ?>" class="u-block u-pv025"><?php echo $p->title()->html() ?></a>
      </li>
      <?php endforeach ?>
    </ul>
    
  </div>
  
<?php
  endif; 
endforeach;
?>