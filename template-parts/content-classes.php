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