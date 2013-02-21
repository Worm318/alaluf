<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet" type="text/css"  />
<link href="<?php bloginfo('template_url'); ?>/css/jquery.slider.min.css" rel="stylesheet" type="text/css"  />
<link href="<?php bloginfo('template_url'); ?>/css/blog.css" rel="stylesheet" type="text/css"  />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />


<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.slider.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pleg.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page">
	<header>
			<div id="logo" class="limited"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/alaluf-logo.png" alt="" /></a></div>
			<div id="banner" class="limited2"><img src="<?php bloginfo('template_directory'); ?>/images/alaluf-banner.png" alt="" /></div>
			<div id="header-menu"><div class="limited">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	
			</div></div>
	</header><!-- #masthead -->
	<div id="inf-main">
	<div id="sup-main">
	<div id="main" class="limited">