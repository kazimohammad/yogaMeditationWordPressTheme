<?php
global $yogameditation;

 get_header(); 

?>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('<?php echo $yogameditation['breadcrumbs_img']['url']?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php site_url() ?> ">Home</a></span>

             <span class="mr-2"><a href="<?php the_permalink() ?> ">Blog</a></span> <span>Blog Single</span></p>
          </div>
        </div>
      </div>
    </section>
    

  
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">

           <?php while(have_posts()):the_post(); ?>
          <div class="col-md-8 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a  href="blog-single.html" class="block-20" style="height: auto;">
                <?php the_post_thumbnail( ) ?>
              </a>

             
              <div class="text p-4 float-right d-block" style="height: auto;">
                <div class="d-flex align-items-center pt-2 mb-4">
                  <div class="one">
                    <span class="day"><?php the_time('d');?></span>
                  </div>
                  <div class="two">
                    <span class="yr"><?php the_time('Y'); ?></span>
                    <span class="mos"><?php the_time('M'); ?></span>
                  </div>
                </div>
                <h3 class="heading mt-2"><?php the_title( ); ?></h3>
                <?php  the_content(); ?>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php get_sidebar(  ) ?>
        </div>
        
      </div>
    </section>

    

   <?php get_footer(); ?>