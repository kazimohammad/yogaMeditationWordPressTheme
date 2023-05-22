 <?php 
global $yogameditation;
  ?>
<style>
  .ftco-footer{
    background: <?php echo $yogameditation['fbg'];?>;
    height: <?php echo $yogameditation['fw'];?>px!important;
  }
  .ftco-footer h2.location{
    color: <?php echo $yogameditation['ftc'];?>;
  }
</style>
 <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
        	<div class="col-lg-3 col-md-6 mb-5 mb-md-5 ftco-animate">
            <div class="ftco-footer-widget mb-4">
              <h1 class="logo">Yogasan</h1>
            </div>
          </div>
          <div class="col-lg col-md-6 mb-5 mb-md-5 ftco-animate">
            <div class="ftco-footer-widget mb-4">
              <h2 class="location"><?php echo $yogameditation['fbt'];?></h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p class="copyright_text"><!-- Link back to Kazi IT Home can't be removed. Template is licensed under Kz BY 3.0. -->
 
  <?php echo $yogameditation['ft'];?>
  <!-- Link back to Kazi IT Home can't be removed. Template is licensed under Kz BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 
    <?php wp_footer(); ?>
  </body>
</html>