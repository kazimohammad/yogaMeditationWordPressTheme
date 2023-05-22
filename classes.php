<?php
/*
Template Name: Class Page
*/
 get_header() ?>
    <!-- END nav -->
    <section class="hero-wrap js-fullheight" style="background-image: url('<?php echo $yogameditation['breadcrumbs_img']['url']?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Yoga Classes</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php site_url(); ?> ">Home</a></span>
     <?php while(have_posts()):the_post(); ?>
             <span><?php the_title() ?></span>
        <?php endwhile; wp_reset_query(); ?>
           </p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section ftco-animate text-center">
            <h3 class="subheading">Yoga Classes</h3>
            <h2 class="mb-1">Choose Your Level &amp; Focus</h2>
          </div>
        </div>
        <div class="row no-gutters">

                <?php

                    $our_classes = new wp_query(array(
                        'post_type'     =>'our_classes',

                        )); 

                    while($our_classes->have_posts()):$our_classes->the_post(); ?>
          <div class="col-md-6 col-lg-4">
                <div class="package-program ftco-animate">
                    <a href="#" class="img d-flex justify-content-center align-items-center" 
                    style="background-image: url(<?php if(function_exists('get_field')){
                                                 $class_img =get_field('classes_image');
                                                        echo $class_img['url'];    } ?>);">
                        <div class="text p-5 text-center">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </a>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </section>


    
	<section class="ftco-gallery ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">See the latest photos</h2>
          </div>
        </div>
        <div class="row">
                <?php

                    $gallery = new wp_query(array(
                        'post_type'     =>'gallery',
                        'posts_per_page'=>4,
                    )); 

                    while($gallery->have_posts()):$gallery->the_post(); ?>
          <div class="col-md-3 ftco-animate">
            <a href="<?php echo get_theme_file_uri()?>/assets/images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" 
                            style="background-image: url(<?php if(function_exists('get_field')){
                                                 $gallery_image =get_field('gallery_image');
                                                        echo $gallery_image['url'];    } ?>);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
        <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </section>

		

  <?php get_footer() ?>