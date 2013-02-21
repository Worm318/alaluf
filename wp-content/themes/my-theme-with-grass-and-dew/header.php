<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="header">
				
		<div id="social">
			<a href="<?php bloginfo('rss2_url'); ?>" class="rss" title="RSS feed"><img src="resource/images/rss-hover.png" width="1" height="1" alt=""/></a>
			<?php
				if(function_exists('my_social_twitter')){
					if(strlen(my_social_twitter()) > 0){
			?>		
						<a href="http://twitter.com/<?php print my_social_twitter(); ?>" class="twitter" title="Twitter : <?php print my_social_twitter(); ?>"><img src="resource/images/twitter-hover.png" width="1" height="1" alt=""/></a>
			<?php			
					}
				}
			?>
									
		</div>
				
		<!-- blog info section --> 
		<div id="blog-info">
			<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
			<p class="description"><?php bloginfo('description'); ?></p>
		</div>
		
	</div>
	
	<!-- menu  section  -->
	<div class="menu <?php echo my_sidebar_position(); ?>" id="my-header-menu">
		<?php mythemes_menu(); ?>
	</div>