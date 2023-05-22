<?php
/*
Template Name: Schedule Page
*/

 get_header() ?>
    <!-- END nav -->

        <section class="hero-wrap js-fullheight" style="background-image: url('<?php echo $yogameditation['breadcrumbs_img']['url']?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Yoga Schedule</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php site_url(); ?> ">Home</a></span>
     <?php while(have_posts()):the_post(); ?>
             <span><?php the_title() ?></span>
        <?php endwhile; wp_reset_query(); ?>
           </p>
          </div>
        </div>
      </div>
    </section>
		

	  <section class="ftco-section">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="sched-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Monday</th>
						        <th>Tuesday</th>
						        <th>Wednesday</th>
						        <th>Thursday</th>
						        <th>Friday</th>
						        <th>Saturday</th>
						        <th>Sunday</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="color">
						        	<p class="time">9:00am</p>
						        </td>
						        
						        <td class="color-1">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('morning_flow');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('sequence_name');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_1');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('morning_flow_coach');
            } ?></span>
						        </td>
						        
						        <td class="color-1">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('cardio_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_1');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_2');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('cardio_coach');
            } ?></span>
						        </td>
						        
						        <td class="color-2">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('body_building');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_2');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_3');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('body_coach');
            } ?></span>
						        </td>
						        
						        <td class="color-3">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('bicep_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_3');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_4');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('bicep_coach');
            } ?></span>
					          </td>
						        
						        <td class="color-1">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('leg_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_4');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_5');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('leg_program_coach');
            } ?></span>
						        </td>

						        <td class="color-4">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('muscle_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_5');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_6');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('muscle_coach');
            } ?></span>
						        </td>

						        <td class="color-5">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('yoga_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_6');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_7');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('yoga_coach');
            } ?></span>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="color">
						        	<p class="time">9:00am</p>
						        </td>
						        
						        <td class="color-1">
						        </td>
						        
						        <td class="color-2">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('cardio_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_1');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_2');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('cardio_coach');
            } ?></span>
						        </td>
						        
						        <td class="color-3">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('body_building');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_2');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_3');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('body_coach');
            } ?></span>
						        </td>
						        
						        <td class="color-3">
					          </td>
						        
						        <td class="color-1">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('leg_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_4');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_5');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('leg_program_coach');
            } ?></span>
						        </td>

						        <td class="color-5">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('muscle_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_5');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_6');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('muscle_coach');
            } ?></span>
						        </td>

						        <td class="color-4">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('yoga_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_6');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_7');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('yoga_coach');
            } ?></span>
						        </td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="color">
						        	<p class="time">9:00am</p>
						        </td>
						        
						        <td class="color-3">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('morning_flow');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('sequence_name');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_1');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('morning_flow_coach');
            } ?></span>
						        </td>
						        
						        <td class="color-1">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('cardio_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_1');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_2');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('cardio_coach');
            } ?></span>
						        </td>
						        
						        <td class="color-2">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('body_building');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_2');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_3');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('body_coach');
            } ?></span>
						        </td>
						        
						        <td class="color-1">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('bicep_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_3');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_4');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('bicep_coach');
            } ?></span>
					          </td>
						        
						        <td class="color-1">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('leg_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_4');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_5');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('leg_program_coach');
            } ?></span>
						        </td>

						        <td class="color-4">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('muscle_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_5');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_6');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('muscle_coach');
            } ?></span>
						        </td>

						        <td class="color-5">
						        	<h3><a href="#"><?php if(function_exists('the_field'));{
              echo the_field('yoga_program');
            } ?></a></h3>
						        	<span class="at"><?php if(function_exists('the_field'));{
              echo the_field('weight_loss_program_6');
            } ?></span>
						        	<p class="time"><?php if(function_exists('the_field'));{
              echo the_field('schedule_time_7');
            } ?></p>
						        	<span class="trainer"><?php if(function_exists('the_field'));{
              echo the_field('yoga_coach');
            } ?></span>
						        </td>
						      </tr><!-- END TR-->

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

   <?php get_footer() ?>