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