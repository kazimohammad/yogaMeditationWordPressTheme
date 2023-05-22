

<?php
global $yogameditation;
/*
Template Name: Contact Page
*/
 get_header(  ) ?>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('<?php echo $yogameditation['breadcrumbs_img']['url']?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php site_url(); ?> ">Home</a></span>
     <?php while(have_posts()):the_post(); ?>
             <span><?php the_title() ?></span>
        <?php endwhile; wp_reset_query(); ?>
           </p>
          </div>
        </div>
      </div>
    </section>
		

	  <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate bg-light p-4">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">
                  <?php if(function_exists('the_field'));{
              echo the_field('contact_title');
            } ?></h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Address:</span> <?php if(function_exists('the_field'));{
              echo the_field('contact_description');

            } ?></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Phone:</span> <a href="tel://1234567920"><?php if(function_exists('the_field'));{
              echo the_field('contact_number');

            } ?></a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Email:</span> <a href="mailto:info@yoursite.com"><?php if(function_exists('the_field'));{
              echo the_field('email_id');

            } ?></a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Website:</span> <a href="#"><?php if(function_exists('the_field'));{
              echo the_field('website_name');

            } ?></a></p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <?php the_content(  ) ?>
          </div>
        </div>
      </div>
    </section>

    <div id="map" class="map"></div>
		

   <?php get_footer() ?>

