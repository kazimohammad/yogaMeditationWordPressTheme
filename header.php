<?php 
global $yogameditation;

 ?>

<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
  <head>
   
    <meta charset="<?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $yogameditation['uf']['url']  ?>">
    
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( ); ?>>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo site_url(); ?> ">Yogasan</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	       
				<?php 
					wp_nav_menu([
						'theme_location'		=> 'header_menu',
						'container'				=> '',
						'menu_class'			=> 'navbar-nav ml-auto',
						'menu_id'				=> '',

					]);
				 ?>
	        
	      </div>
		  </div>
	  </nav>