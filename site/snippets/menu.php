<nav role="navigation">

  <ul class="menu u-mr025" style="margin-top: -20px; margin-bottom: -20px;">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a class="u-pv15 u-ph1<?php e($p->isOpen(), ' active') ?>" href="<?php echo $p->url() ?>">
        <?php echo $p->title()->html() ?>
        <?php if($p->hasVisibleChildren()): ?>
          <i class="fa fa-angle-down u-ml025"></i>
        <?php endif; ?>
      </a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>" class="u-pv05 u-ph1"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>

</nav>
