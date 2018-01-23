<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap home-header">
      <div class="text-v text-s">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <div class="text-v-2 text-s">
        <?= $page->introb()->kirbytext() ?>
      </div>
      <h1 class="text-l-b"><?= $page->displaytitle()->html() ?></h1>
      
    </header>
    <section class="home-wrap">
       
       <img class="home-hero-image" src="<?= $page->image()->url() ?>" alt="" />
        
         <div class="home-about text-m">
          <?= $page->about()->text() ?>
        </div>
    
  
    
      <p class="product-label text-s">Our Products</p>
    
    <div class="showcase">
        
        <?php snippet('preview') ?>
    </div>
    
    <div class="home-order">
        <a href="/order" class="text-m select">Make an order</a>
        
    </div>
    
    </section>
    

  </main>

<?php snippet('footer') ?>