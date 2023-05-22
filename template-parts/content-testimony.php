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
              'post_type'   =>'testimonial',
            )); 

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