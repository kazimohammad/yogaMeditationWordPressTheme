

	<section class="ftco-section ftco-intro" 
	style="background-image: url(<?php if(function_exists('get_field')){
						 $hero_img =get_field('about_background_image');
                                      echo $hero_img['url'];    } ?>);">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6">
						<div class="heading-section ftco-animate">
	            <h2 class="mb-4"><?php if(function_exists('the_field'))
                                echo the_field('about_title'); ?></h2>
	          </div>
	          <p class="ftco-animate"><?php if(function_exists('the_field'))
                                echo the_field('about_description'); ?></p>
	         
					</div>
					<div class="col-md-6 ">
					</div>
				</div>
			</div>
		</section>