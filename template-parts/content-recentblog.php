  

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Blog</h3>
            <h2 class="mb-1">Recent Posts</h2>
          </div>
        </div>
        <div class="row d-flex">

        	<?php

    				$recent_post = new wp_query(array(
    					'post_type'		=>'recent_post',
    					'posts_per_page'	=> 3,

    			
    				)); 

    				while($recent_post->have_posts()):$recent_post->the_post(); ?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a id="blog_img" href="blog-single.html" class="block-20" 
              style="background-image: url(<?php if(function_exists('get_field')){
                                                 $blog_image =get_field('blog_image');
                                                        echo $blog_image['url'];    } ?>);">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4">
              		<div class="one">
              			<span class="day"><?php the_time('d'); ?></span>
              		</div>
              		<div class="two">
              			<span class="yr"><?php the_time('Y'); ?></span>
              			<span class="mos"><?php the_time('M'); ?></span>
              		</div>
              	</div>
                <h3 class="heading mt-2"><a href="#"><?php the_title(); ?></a></h3>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
         <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </section>
