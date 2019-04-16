<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightslider.css">

  <!-- Animation  CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate1.css">
  
  <!-- Latest compiled and minified JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/lightslider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/myscript.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script> 
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<?php wp_head(); ?> 


<!--slider counting -->
<script>
  	$(document).ready(function(){
  		$("#content-slider").lightSlider({
  	  		item:1,
          loop:true,
          keyPress:true,
    	   	pager: true,
        });
  	 });
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
      if (scroll >= 500) {
        $(".js-top").addClass("active");
      } else {
        $(".js-top").removeClass("active");
      }
    });
    </script>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site1">

		<header id="masthead" class="site-heade1" role="banner1">
		
<!--------------------------------top header area--------------------------->
              <div class="top-header-area">
              	  <div class="container-fluid">
              	  	<div class="col-md-2 logo">
											<img src="<?php cot_showheaderlogo(); ?>">
              	  	</div>
              	    <div class="col-md-5 logo">
											<div id="navbar" class="navbar">
				                <nav id="site-navigation" class="navigation main-navigation" role="navigation">
					                <button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					                 <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					                  <?php
					                    wp_nav_menu(
					                     	array(
							                   'theme_location' => 'primary',
						                   	'menu_class'     => 'nav-menu',
						                   	'menu_id'        => 'primary-menu',
					                 	)
				              	);
				             	?>
              	  	</div>
              	  		</nav><!-- #site-navigation -->
			</div><!-- #navbar -->

              	  	<div class="col-md-2 search-frm">
											<?php get_search_form(); ?>
              	  	</div>

              	  	<div class="col-md-2 shop-onln">
              	  		<a href="#">Shop Online</a>

              	  	</div>
              	  	<div class="col-md-1 cart">
											<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

              	  	</div>
              	  </div>
              	</div>

              	<div class="row">
              		<img src="<?php echo the_field('img'); ?>" />
              	</div>


			
					

			
		</header><!-- #masthead -->

		<div id="main" class="site-main">
