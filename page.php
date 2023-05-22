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
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php site_url(); ?> ">Home</a></span>
     <?php while(have_posts()):the_post(); ?>
             <span><?php the_title() ?></span>
        <?php endwhile; wp_reset_query(); ?>
           </p>
          </div>
        </div>
      </div>
    </section>
		

	
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">

           <?php while(have_posts()):the_post(); ?>
         <?php the_content( ); ?>
          <?php endwhile; wp_reset_query(); ?>
        </div>
       
      </div>
    </section>

    

   <?php get_footer(); ?>