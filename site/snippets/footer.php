  <footer class="footer" role="contentinfo">
      <div class="container">
        <div id="strip_left-1"></div>
        <div id="strip_left-2"></div>
        <div id="strip_left-3"></div>
         <div id="strip_left-4"></div>
      <div id="strip_right-1"></div>
        <div id="strip_right-2"></div>
        <div id="strip_right-3"></div>
         <div id="strip_right-4"></div>
      </div>
      <p class="text-s">
          021 123 4567
          <br />
          <a href="#">hello@nico.co.nz</a>
      </p>
      <p class="text-s">
        321 Karangahape Rd,
        <br />
        Auckland,
        <br />
        New Zealand
    </p>
      <p class="text-s">
        Opening hours
        <br />
        9-5pm M-F
        <br />
        Closed S-S
      </p>
      <p class="text-s"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      
    
  </footer>

</body>
</html>