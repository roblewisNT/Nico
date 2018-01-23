<?php snippet('header') ?>

  <main class="main" role="main">

<!--
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
      <hr />
    </header>
-->
      
     <section class="projects-wrap">
      <p class="projects-title text-s">Our Products</p>
      <div class="showcase">
        
        <?php snippet('preview') ?>
    </div>
      </section>
    

  </main>

<?php snippet('footer') ?>