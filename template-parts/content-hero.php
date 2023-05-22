  <style>

#hero_button {
    background: <?php if(function_exists('the_field'))
                                echo the_field('hero_button_color'); ?>
             }                   
 
 .hero-wrap .overlay {
           background-color:<?php if(function_exists('the_field'))
                                echo the_field('hero_bg_color'); ?>
 
 }  

  </style>


  <section class="hero-wrap js-fullheight" style="background-image: url('<?php if(function_exists('get_field')){

                                                                         $hero_img =get_field('hero_background_image');
                                                                         echo $hero_img['url'];    } ?>');background-position: 220px;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
          <div class="col-md-8 ftco-animate">
            <h1 class="typewrite mb-3" data-period="4000" data-type='[ "Inspiration For Joyful Living.", "Effective Therapy Against Stress.", "Flexibility is A Second Power."]'>
              <span class="wrap"></span>
            </h1>
            <h2 class="mb-5"><?php if(function_exists('the_field'))
                                echo the_field('hero_title'); ?></h2>
            <p><a href="#" id="hero_button" class="btn btn-primary p-3 px-4"><?php if(function_exists('the_field'))
                                echo the_field('hero_button_text'); ?></a></p>
          </div>
        </div>
      </div>
    </section>
    