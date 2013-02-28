<?php function register_my_menus() {
  register_nav_menus(
    array( 
		'header-menu' => __( 'Header Menu' ),
		'header-sup-menu' => __( 'Superior Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	)
  );
}
add_action( 'init', 'register_my_menus' );
?>

<?php
if ( function_exists('register_sidebar') )
register_sidebar();
?>

<?php
	add_post_type_support( 'page', 'excerpt' );
?>