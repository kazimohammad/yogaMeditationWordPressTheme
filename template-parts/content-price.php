 <style>
 	#member_button {
    background: <?php if(function_exists('the_field'))
                                echo the_field('membership_button_color'); ?>
             } 
 </style>

 <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Pricing Tables</h3>
            <h2 class="mb-1"><?php if(function_exists('the_field'))
                                echo the_field('membarship_title'); ?></h2>
          </div>
        </div>
        <div class="row">
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Year Card</h2>
	            <span class="price"><sup>$</sup> <span class="number"><?php if(function_exists('the_field'))
                                echo the_field('year_price'); ?></span></span>
	            <span class="excerpt d-block"><?php if(function_exists('the_field'))
                                echo the_field('yearly_time'); ?></span>
	            
					<h3><?php if(function_exists('the_field'))
                                echo the_field('year_class_description'); ?></h3>

	            <a href="<?php if(function_exists('the_field'))
                                echo the_field('membership_button_link'); ?>" id='member_button' class="btn btn-primary d-block px-2 py-4"><?php if(function_exists('the_field'))
                                echo the_field('membership_button_text'); ?></a>
	            </div>
	          </div>
	        </div>

	       <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Monthly Card</h2>
	            <span class="price"><sup>$</sup> <span class="number"><?php if(function_exists('the_field'))
                                echo the_field('monthly_price'); ?></span></span>
	            <span class="excerpt d-block"><?php if(function_exists('the_field'))
                                echo the_field('monthly_time'); ?></span>
	            
					<h3><?php if(function_exists('the_field'))
                                echo the_field('monthly_class_description'); ?></h3>

	            <a href="<?php if(function_exists('the_field'))
                                echo the_field('membership_button_link'); ?>" id='member_button' class="btn btn-primary d-block px-2 py-4"><?php if(function_exists('the_field'))
                                echo the_field('membership_button_text'); ?></a>
	            </div>
	          </div>
	        </div>

	       <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Weekly Card</h2>
	            <span class="price"><sup>$</sup> <span class="number"><?php if(function_exists('the_field'))
                                echo the_field('weekly_price'); ?></span></span>
	            <span class="excerpt d-block"><?php if(function_exists('the_field'))
                                echo the_field('weekly_time'); ?></span>
	            
					<h3><?php if(function_exists('the_field'))
                                echo the_field('weekly_class_description'); ?></h3>

	            <a href="<?php if(function_exists('the_field'))
                                echo the_field('membership_button_link'); ?>" id='member_button' class="btn btn-primary d-block px-2 py-4"><?php if(function_exists('the_field'))
                                echo the_field('membership_button_text'); ?></a>
	            </div>
	          </div>
	        </div>
	       
	      </div>
      </div>
    </section>