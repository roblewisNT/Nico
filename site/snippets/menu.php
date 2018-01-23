<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="text-s menu-item<?= r($item->isOpen(), ' is-active') ?>">
          <div class="menu-item-underline">
              <a href="<?= $item->url() ?>" class="select"><?= $item->title()->html() ?></a>
          </div>
    </li>
    <?php endforeach ?>
  </ul>
</nav>