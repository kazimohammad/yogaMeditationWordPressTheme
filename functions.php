<?php 
//Theme Supports
add_action('after_setup_theme','yogameditation_theme_supports');

function yogameditation_theme_supports(){

				add_theme_support('menus');
				add_theme_support( 'widgets' );
				add_theme_support( 'title-tag' );
				add_theme_support( 'post-thumbnails' );
				load_theme_textdomain('yogameditation');

				register_nav_menus( [
					'header_menu'   => 'Main Menu'
				] );
}	
//Theme assets enqueue

add_action('wp_enqueue_scripts','yogameditation_assets_enqueue');

function yogameditation_assets_enqueue(){

	wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900' );
	wp_enqueue_style( 'iconic-bootstrap', get_theme_file_uri().'/assets/css/open-iconic-bootstrap.min.css', null,true,'all' );
	wp_enqueue_style( 'animate', get_theme_file_uri().'/assets/css/animate.css', null,true,'all' );
	wp_enqueue_style( 'owl.carousel', get_theme_file_uri().'/assets/css/owl.carousel.min.css', null,true,'all' );
	wp_enqueue_style( 'owl.theme', get_theme_file_uri().'/assets/css/owl.theme.default.min.css', null,true,'all' );
	wp_enqueue_style( 'magnific-popup', get_theme_file_uri().'/assets/css/magnific-popup.css', null,true,'all' );
	wp_enqueue_style( 'aos', get_theme_file_uri().'/assets/css/aos.css', null,true,'all' );
	wp_enqueue_style( 'ionicons', get_theme_file_uri().'/assets/css/ionicons.min.css', null,true,'all' );
	wp_enqueue_style( 'datepicker', get_theme_file_uri().'/assets/css/bootstrap-datepicker.css', null,true,'all' );
	wp_enqueue_style( 'timepicker', get_theme_file_uri().'/assets/css/jquery.timepicker.css', null,true,'all' );
	wp_enqueue_style( 'flaticon', get_theme_file_uri().'/assets/css/flaticon.css', null,true,'all' );
	wp_enqueue_style( 'icomoon', get_theme_file_uri().'/assets/css/icomoon.css', null,true,'all' );
	wp_enqueue_style( 'style', get_theme_file_uri().'/assets/css/style.css', null,true,'all' );
	wp_enqueue_style('main',get_stylesheet_uri());


	
	wp_enqueue_script( 'jquery-migrate', get_theme_file_uri().'/assets/js/jquery-migrate-3.0.1.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'popper', get_theme_file_uri().'/assets/js/popper.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri().'/assets/js/bootstrap.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'easing', get_theme_file_uri().'/assets/js/jquery.easing.1.3.js',array('jquery'), true, true );
	wp_enqueue_script( 'waypoints', get_theme_file_uri().'/assets/js/jquery.waypoints.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'stellar', get_theme_file_uri().'/assets/js/jquery.stellar.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'carousel', get_theme_file_uri().'/assets/js/owl.carousel.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'magnific', get_theme_file_uri().'/assets/js/jquery.magnific-popup.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'aos', get_theme_file_uri().'/assets/js/aos.js',array('jquery'), true, true );
	wp_enqueue_script( 'animateNumber', get_theme_file_uri().'/assets/js/jquery.animateNumber.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'datepicker', get_theme_file_uri().'/assets/js/bootstrap-datepicker.js',array('jquery'), true, true );
	wp_enqueue_script( 'timepicker', get_theme_file_uri().'/assets/js/jquery.timepicker.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'scrollax', get_theme_file_uri().'/assets/js/scrollax.min.js',array('jquery'), true, true );
	wp_enqueue_script( 'map','https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false' );
	wp_enqueue_script( 'google-map', get_theme_file_uri().'/assets/js/google-map.js',array('jquery'), true, true );
	wp_enqueue_script( 'main', get_theme_file_uri().'/assets/js/main.js',array('jquery'), true, true );
}	


/* TGM Connection */
include_once 'inc/tgm/example.php';


/* Redux framework*/

include_once 'inc/Redux/ReduxCore/framework.php';
include_once 'inc/Redux/sample/config.php';

// Widgets

add_action('widgets_init','yogameditation_widgets');

function yogameditation_widgets(){
	register_sidebar(array(
		'name'  			=>'Right Sidebar 1',
		'id'				=>'rs1',
		'before_widget'		=>'<div class="sidebar-box ftco-animate">',
		'after_widget'		=>'</div>',
		'before_title'		=>'<div class="categories">
                <h3 class="heading-2">',
		'after_title'		=>'</h3>',
	));
	register_sidebar(array(
		'name'  			=>'Right Sidebar 2',
		'id'				=>'rs2',
		'before_widget'		=>' <div class="sidebar-box ftco-animate">',
		'after_widget'		=>'</div>',
		'before_title'		=>'  <h3 class="heading mt-2">',
		'after_title'		=>'</h3>',
	));
	register_sidebar(array(
		'name'  			=>'Right Sidebar 3',
		'id'				=>'rs3',
		'before_widget'		=>'<div class="sidebar-box ftco-animate">',
		'after_widget'		=>'</div>',
		'before_title'		=>'<h3 class="heading-2">',
		'after_title'		=>'</h3>',
	));
	register_sidebar(array(
		'name'  			=>'Right Sidebar 4',
		'id'				=>'rs4',
		'before_widget'		=>'<div class="sidebar-box ftco-animate">',
		'after_widget'		=>'</div>',
		'before_title'		=>'<h3 class="heading-2">',
		'after_title'		=>'</h3>',
	));
	register_widget( 'recent_post' );
}
class recent_post extends wp_widget{
	public function __construct(){
		parent::__construct('recent_post',' Latest News',[
			'description' => 'This Is Custom Widget for Latest News'
		]);
	}
	public function widget ($one,$two){ ?>
		 
          <div class="sidebar-box ftco-animate">
              <h3 class="heading-2">Recent Blog</h3>
              <?php

            $recent_post = new wp_query(array(
              'post_type'   =>'recent_post',
              'posts_per_page'  => 3,

          
            )); 

            while($recent_post->have_posts()):$recent_post->the_post(); ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php if(function_exists('get_field')){
                                                 $blog_image =get_field('blog_image');
                                                        echo $blog_image['url'];    } ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php the_time('d M, Y') ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php the_author( ); ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span> <?php comments_number( 0, 1,'%' ) ?></a></div>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_query(); ?> 
            </div>
         


	<?php
		}  
	public function form($two){

	}
}

//Custom Post Type