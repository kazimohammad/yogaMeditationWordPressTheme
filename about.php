

<?php 
global $yogameditation;
/*
Template Name: About Page
*/

get_header(  ) ?>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('<?php echo $yogameditation['breadcrumbs_img']['url']?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">About Yogasan</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="<?php site_url(); ?> ">Home</a></span>
     <?php while(have_posts()):the_post(); ?>
             <span><?php the_title() ?></span>
        <?php endwhile; wp_reset_query(); ?>
           </p>
          </div>
        </div>
      </div>
    </section>
		
		<section  class="ftco-section d-md-flex bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 text-center">
						<h2><?php if(function_exists('the_field'));{
							echo the_field('about_content');

						} ?></h2>
					</div>
				</div>
			</div>
    </section>

    <section class="ftco-section">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h3 class="subheading">Coaches</h3>
            <h2 class="mb-1">Meet Our Yoga Coaches</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" 
	    				style="background-image: url(<?php if(function_exists('get_field')){
						 $coach_image_1 =get_field('coach_image_1');
                                      echo $coach_image_1['url'];    } ?>);"></div>
	    				<div class="text bg-white p-4 ftco-animate">
	    					<span class="subheading"><?php if(function_exists('the_field'));{
							echo the_field('coach_position_1');

						} ?></span>
	    					<h3><a href="#"><?php if(function_exists('the_field'));{
							echo the_field('coach_name_1');
								} ?>
							
						</a></h3>
	    					<ul class="ftco-social-media d-flex mt-4">
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
	              </ul>
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" 
	    				style="background-image: url(<?php if(function_exists('get_field')){
						 $coach_image_2 =get_field('coach_image_2');
                                      echo $coach_image_2['url'];    } ?>);"></div>
	    				<div class="text bg-white p-4 ftco-animate">
	    					<span class="subheading"><?php if(function_exists('the_field'));{
							echo the_field('coach_position_2');

						} ?></span>
	    					<h3><a href="#"><?php if(function_exists('the_field'));{
							echo the_field('coach_name_2');

						} ?></a></h3>
	    					<ul class="ftco-social-media d-flex mt-4">
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
	              </ul>
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" 
	    				style="background-image: url(<?php if(function_exists('get_field')){
						 $coach_image_3 =get_field('coach_image_3');
                                      echo $coach_image_3['url'];    } ?>);"></div>
	    				<div class="text bg-white p-4 ftco-animate">
	    					<span class="subheading"><?php if(function_exists('the_field'));{
							echo the_field('coach_position_3');

						} ?></span>
	    					<h3><a href="#"><?php if(function_exists('the_field'));{
							echo the_field('coach_name_3');

						} ?></a></h3>
	    					<ul class="ftco-social-media d-flex mt-4">
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
	              </ul>
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" 
	    				style="background-image: url(<?php if(function_exists('get_field')){
						 $coach_image_4 =get_field('coach_image_4');
                                      echo $coach_image_4['url'];    } ?>);"></div>
	    				<div class="text bg-white p-4 ftco-animate">
	    					<span class="subheading"><?php if(function_exists('the_field'));{
							echo the_field('coach_position_4');

						} ?></span>
	    					<h3><a href="#"><?php if(function_exists('the_field'));{
							echo the_field('coach_name_4');

						} ?></a></h3>
	    					<ul class="ftco-social-media d-flex mt-4">
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
	              </ul>
	    					<p></p>
	    				</div>
	    			</div>
    			</div>

    	
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" 
 							style="background-image: url(<?php if(function_exists('get_field')){
                                                 $customer_analysis_image =get_field('customer_analysis_image');
                                                        echo $customer_analysis_image['url'];    } ?>);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="5000">0</strong>
		              	<span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="4560">0</strong>
		              	<span>Yoga Workshops</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="570">0</strong>
		              	<span>Years of Experience</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Lesson Conducted</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

   <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Testimony</h3>
            <h2 class="mb-1">Successful Stories</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">

          <?php

            $testimonial = new wp_query(array(
              'post_type'   =>'testimonial
              ')); 

            while($testimonial->have_posts()):$testimonial->the_post(); ?>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="text">
                  	<div class="line pl-5">
	                    <?php the_content(); ?>
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(<?php if(function_exists('get_field')){
                                                 $testimonial_img =get_field('testimonial_image');
                                                        echo $testimonial_img['url'];    } ?>);">
		                  </div>
		                  <div class="ml-4">
		                  	<p class="name"><?php the_title(); ?></p>
		                    <span class="position">Customer</span>
		                  </div>
                    </div>
                  </div>
                </div>
              </div>
        
        <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
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