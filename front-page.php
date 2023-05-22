<?php get_header(); ?>	
    <!-- END nav -->

  <!-- Hero area start -->
  <?php get_template_part('template-parts/content','hero') ?>
  <!-- Hero area end -->
  <!-- About Section start -->
<?php get_template_part('template-parts/content','about') ?>
  <!-- About Section End -->
		
	<!-- Service Section Start -->
<?php get_template_part('template-parts/content','service') ?>	
	<!-- Service Section End -->
    
  <!-- Classes section start -->
  <?php get_template_part('template-parts/content','classes') ?>
  <!-- Classes section End -->

	 <!-- Price section Start -->

	<?php get_template_part('template-parts/content','price') ?> 
	 <!-- Price section End -->
	<!-- Testimonial Section Start -->
	<?php get_template_part('template-parts/content','testimony') ?> 
	<!-- Testimonial Section End -->

   
	<!-- Number Of Customer Section start -->
	<?php get_template_part('template-parts/content','customer_analysis') ?>
	<!-- Number Of Customer Section End -->

    <!-- Recent Blog post Start -->
    <?php get_template_part('template-parts/content','recentblog') ?>
    <!-- Recent Blog post End -->

   <!-- Gallery Section Start -->
   <?php get_template_part('template-parts/content','gallery') ?>
   <!-- Gallery Section End -->
 <?php get_footer(); ?>