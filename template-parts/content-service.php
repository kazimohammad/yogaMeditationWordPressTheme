 	<style>
		#service_bg {
     background:<?php if(function_exists('the_field'))
                                echo the_field('about_background_color');?> !important;
}
	</style>


  <section id="service_bg" class="ftco-section ftco-section-services bg-light">
    	<div class="container">
    		<div class="row">
    			
    				<?php

    				$service = new wp_query(array(
    					'post_type'		=>'services
    					')); 

    				while($service->have_posts()):$service->the_post(); ?>
    					<div class="col-md-3">
						<div class="services ftco-animate">
							<div class="icon ">
							<?php the_post_thumbnail();?>
							</div>
							<div class="text mt-4">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); ?>
					
				
				</div>
    	</div>
    </section>