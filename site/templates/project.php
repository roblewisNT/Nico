<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->year() ?>
      </div>
      
    </header>
    
     <section class="content">
          
              
               
            
           <section class="gallery">
           <div class="gallery-grid">
              <?php foreach($page->images() as $image): ?>
              <figure>
              <a class="next" onclick="plusSlides(1)">
               <div class="mySlides fade">
                
                  <img src="<?php echo $image->url() ?>" alt="">
                
                </div>
                </a>
              </figure>
              <?php endforeach ?>
              </div>
            </section>
         
         
      
          <div class="construction">
            <p class="text-s">Construction</p>
            <p class="text-s"><?= $page->construction()->text() ?></p>
          </div>
          <div class="dimensions">
            <p class="text-s">Dimensions</p>
            <p class="text-s"><?= $page->dimensions()->text() ?></p>
          </div>
          <div class="description">
            <p class="text-m"><?= $page->description()->text() ?></p>
          </div>
          <div class="price">
            <p class="text-m"><?= $page->price()->text() ?></p>
            <a href="/order" class="text-m">Make an order</a>
          </div>
      
      </section>
    
<!--    <?php snippet('prevnext') ?>-->

  </main>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

<?php snippet('footer') ?>