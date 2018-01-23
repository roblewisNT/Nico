<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php foreach($projects as $project): ?>
    
        <div class="showcase-mySlides fade">
            <li class="showcase-item">

                <a class="next showcase-image" onclick="plusSlides(1)">
                  <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image; ?>
                    <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>"/>
                  <?php endif ?>
                </a>
                 <div class="showcase-panel">
                      <h3 class="showcase-title text-s"><?= $project->title()->html() ?></h3>
                      <p class="showcase-info text-s">
                      <?= $project->info()->text() ?>

                    </p>
                     <div class="showcase-more text-s">
                          <a href="<?= $project->url() ?>"><p class="select">See more</p></a>
                      </div>
                  
                  </div>
        <!--
                <a href="<?= $project->url() ?>" class="showcase-link text-s">  
                </a>
        -->
            </li>
            </div>
            </a>

  <?php endforeach ?>
  
  

</ul>





             
        
                
            
           
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
      var slides = document.getElementsByClassName("showcase-mySlides");
//      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
//      for (i = 0; i < dots.length; i++) {
//          dots[i].className = dots[i].className.replace(" active", "");
//      }
        
      slides[slideIndex-1].style.display = "block";   
//      dots[slideIndex-1].className += " active";
    }
    </script>