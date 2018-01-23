<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="wrap">
      <header class="wrap ">
        <div class="text-v text-s">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <h1 class="text-l"><?= $page->displaytitle()->text() ?></h1>
      </header>
      
      <section class="content">
          <img class="hero_image" src="<?= $page->image()->url() ?>" alt="" />
          <div class="contact">
            <p class="text-s">Contact</p>
            <p class="text-s"><?= $page->contact()->text() ?></p>
          </div>
          <div class="address">
            <p class="text-s">Address</p>
            <p class="text-s"><?= $page->address()->text() ?></p>
          </div>
          <div class="hours">
            <p class="text-s">Hours</p>
            <p class="text-s"><?= $page->hours()->text() ?></p>
          </div>
          <div class="about">
            <p class="text-m"><?= $page->about()->text() ?></p>
          </div>
        </section>
          


    </div>
  </main>

<?php snippet('footer') ?>