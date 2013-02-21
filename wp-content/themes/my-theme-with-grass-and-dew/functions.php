<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="sidebartitle">',
        'after_title' => '</h2>',
    ));
	
	
	/*
		menu utility
	*/
	
	if ( function_exists('register_nav_menu') ) {
		register_nav_menus(
			array(
				'menu_in_header' => 'menu in header' 
			)
		);
	}
	
	if ( ! isset( $content_width ) ) { 
		$content_width = 540; 
	}

	
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	
	// Limit of displayed menu
	define('_LIMIT_',4);
	// Align Sidebar
	define('_SIDE_','left');
	
	// class nav - menu 
	class mythemes_walker_nav_menu extends Walker {

		var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
		var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

		var $limit = 5;
		var $rootitemcount = 0;
		var $need_more = false; 
		
		function __construct($lm) {
				$this -> limit = $lm;
		} 
		
		function start_lvl(&$output, $depth) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"sub-menu\">\n";
		}

		function end_lvl(&$output, $depth) {
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</ul>\n";
		}

		function start_el(&$output, $item, $depth, $args) {
		
			if($this -> rootitemcount == 0){
				if ( is_home() ) {
					$output .= '<li class="before"></li>';
				}
				
				$output .= '<li class="menu-item '; 
		
				if(is_home()){ $output .= 'current_page_item'; } 
		
				$output .= ' home_page_item">';
				$output .= ' 	<a href="'.home_url().'/" title="Home">Home</a>';
				$output .= '</li>';
				
				if ( is_home() ) {
					$output .= '<li class="after"></li>';
				}
			}
			
			if ($depth == 0){
				$this -> rootitemcount++;
				
				if($this -> limit == $this -> rootitemcount){
					$this -> need_more = true;
					$output .= '<li class="menu-item more">';
					$output .= '<a href="#"></a>';
					$output .= '<div>';
					$output .= '<ul class="sub-menu">';
				}
			} 
			
			if ( ! empty( $item->post_type ) && $item->post_type == 'nav_menu_item' ) {
				$id = $item -> title;
			}else{
				$id = $item -> ID;
			}
			
			
			if( $this -> limit > $this -> rootitemcount ){
				if( is_page($id) ){
					$output .= '<li class="before"></li>';
				}
			}	
					
			global $wp_query;
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			
			if(is_page($id)){ 
				$classes[] = 'current_page_item menu-item menu-item-' . $item->ID; 
			}else{ 
				$classes[] = 'menu-item menu-item-' . $item->ID;
			}

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
			$class_names = ' class="' . esc_attr( $class_names ) . '"';

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names .'>';

			if ( ! empty( $item->post_type ) && $item->post_type == 'nav_menu_item' ) {
				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			} else {
				$attributes  = ! empty( $item->post_title ) ? ' title="'  . esc_attr( $item->post_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ' href= "' . esc_attr( get_permalink( $item->ID ) ) . '"';			 
				$item->title = $item->post_title;
			}


			$item_output = '';
			
			if( !empty ( $args->before ) ) {
				$item_output .= $args->before;
			}
			
			$item_output .= '<a'. $attributes .'>';
			
			if( !empty ( $args->link_before ) ) {
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
			}else{
				$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
			}
			
			if( !empty ( $args->link_after ) ) {
				$item_output .= $args->link_after;
			}
			
			$item_output .= '</a>';
			
			if( !empty( $args->after ) ){
				$item_output .= $args->after;
			}
			
			
			
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			
			
		}

		function end_el(&$output, $item, $depth) {
			$output .= "</li>\n";
			
			if ( ! empty( $item->post_type ) && $item->post_type == 'nav_menu_item' ) {
				$id = $item -> title;
			}else{
				$id = $item -> ID;
			}
			
			if( $this -> limit > $this -> rootitemcount ){
				if( is_page($id) ){
					$output .= '<li class="after"></li>';
				}
			}
		}
		
	}
	
			
	function mythemes_menu(){
	
		
		if(my_menu_limit()){
			$limit = my_menu_limit();
		}else{
			$limit = _LIMIT_;
		}

		$my_nav_menu = new mythemes_walker_nav_menu($limit);

		$args = array(
			'menu'            => '', 
			'container'       => 'div', 
			'container_class' => 'container', 
			'container_id'    => '', 
			'menu_class'      => 'container', 
			'menu_id'         => '',
			'echo'            => false,
			'fallback_cb'     => '',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'depth'           => 0,
			'walker'          => $my_nav_menu,
			'theme_location'  => 'menu_in_header',
		); //menu_in_header
			
		$result = wp_nav_menu( $args );
		
		if(!$result){
			$args['depth'] = -1;
			$my_nav_menu -> db_fields['id'] = 'ID';
			$args['walker'] = $my_nav_menu ;
			$args['fallback_cb'] = 'wp_page_menu';
			$result = wp_nav_menu( $args );
		}
		
		if($my_nav_menu -> need_more){
			$result .="</li></ul></div>";
		}

		echo $result;
	}
	/*
	
		Options  
	*/
	
/// add menu to admin --
	if (is_admin()){
		add_action('admin_menu', 'my_theme_options_menu');
		add_action('admin_init', 'my_theme_options_register');
	}
// whitelist options --
	function my_theme_options_register() {
		register_setting('my_social_options_group', 'myfs_twitter');
		
		register_setting('my_menu_options_group', 'myfi_limit');
		
		register_setting('my_template_options_group', 'myfs_side');
	}
// admin menu page details --
function my_theme_options_menu() {
	add_theme_page('My Theme Options', 'My Theme Options', 'administrator', 'my_social'  		, 'my_social_options_group');
	add_theme_page('&nbsp;&nbsp;&raquo; menu'     , '&nbsp;&nbsp;&raquo; menu'    , 'administrator', 'my_menu'     	, 'my_menu_options_group'  );
	add_theme_page('&nbsp;&nbsp;&raquo; template' , '&nbsp;&nbsp;&raquo; template', 'administrator', 'my_template' 	, 'my_template_options_group');
}
// add actual menu page --
function my_social_options_group() { ?>
	<style>
		.wrap h2{
			border-bottom:1px solid #CCCCCC;
			padding-bottom:0;
		}
	</style>
	<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div>

	
	<!-- Title Page -->
	<h2 style="">
		<a href="?page=my_social" class="nav-tab nav-tab-active">Social Options</a>
		<a href="?page=my_menu" class="nav-tab">Menu Options</a>
		<a href="?page=my_template" class="nav-tab">Template Options</a>
	</h2>
	<form method="post" action="options.php">
	<?php settings_fields('my_social_options_group'); ?>
		<table class="form-table" style="margin-top: 20px; padding-bottom: 10px; border: 1px dotted #bbb; border-width:1px 0;">
		
		<tr valign="top">
			<td width="20%"><strong>Twitter Username</strong></td>
			<td width="80%">
				<input type="text" name="myfs_twitter" style="width:300px; "value="<?php echo get_option('myfs_twitter'); ?>"/><br> 
				<small>Input your Twitter username here.</small>
			</td>
		</tr>
		</table>
	
		<p class="submit">
		
			<!-- PalPay Button Donate -->
			<div style="float:right; display:inline;">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_donations">
					<input type="hidden" name="business" value="S6JD2HALWXNPS">
					<input type="hidden" name="lc" value="RO">
					<input type="hidden" name="currency_code" value="EUR">
					<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHosted">
					<center><input type="image" style="border:0px" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div> 
		
			<input type="submit" class="button-primary" value="Save Changes" />
		</p>
	</form>
	</div>

<?php 
}



function my_menu_options_group() { ?>
	<style>
		.wrap h2{
			border-bottom:1px solid #CCCCCC;
			padding-bottom:0;
		}
	</style>

	<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div>

	
	<!-- Title Page -->
	<h2>
		<a href="?page=my_social" class="nav-tab">Social Options</a>
		<a href="?page=my_menu" class="nav-tab nav-tab-active">Menu Options</a>
		<a href="?page=my_template" class="nav-tab">Template Options</a>
	</h2>
	<form method="post" action="options.php">
	<?php settings_fields('my_menu_options_group'); ?>
		<table class="form-table" style="margin-top: 20px; padding-bottom: 10px; border: 1px dotted #bbb; border-width:1px 0;">
		
		<tr valign="top">
			<td width="20%"><strong>Limit menu items</strong></td>
			<td width="80%">
				<input type="text" name="myfi_limit" style="width:300px; "value="<?php if(get_option('myfi_limit')){ echo get_option('myfi_limit'); } else { echo _LIMIT_; } ?>"/><br> 
				<small>Max items displayed in menu.</small>
			</td>
		</tr>
		</table>
	
		<p class="submit">
		
			<!-- PalPay Button Donate -->
			<div style="float:right; display:inline;">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_donations">
					<input type="hidden" name="business" value="S6JD2HALWXNPS">
					<input type="hidden" name="lc" value="RO">
					<input type="hidden" name="currency_code" value="EUR">
					<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHosted">
					<center><input type="image" style="border:0px" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div> 
		
			<input type="submit" class="button-primary" value="Save Changes" />
		</p>
	</form>
	</div>

<?php 
}

function my_template_options_group(){
?>
	<style>
		.wrap h2{
			border-bottom:1px solid #CCCCCC;
			padding-bottom:0;
		}
	</style>
	
	<?php
	
		if(get_option('myfs_side')){
			$value = get_option('myfs_side');
		}else{
			$value = _SIDE_;
		}
		
	?>

	<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div>

	
	<!-- Title Page -->
	<h2>
		<a href="?page=my_social" class="nav-tab">Social Options</a>
		<a href="?page=my_menu" class="nav-tab">Menu Options</a>
		<a href="?page=my_template" class="nav-tab nav-tab-active">Template Options</a>
	</h2>
	<form method="post" action="options.php">
		<?php settings_fields('my_template_options_group'); ?>
		<table class="form-table" style="margin-top: 20px; padding-bottom: 10px; border: 1px dotted #bbb; border-width:1px 0;">
		<tr valign="middle">
			<td colspan="2" align="left">
				Choose the alignment type of the sidebar, in template.
			</td>
		</tr>	
		<tr valign="middle">
			<td width="20%"><strong>In left side :</strong></td>
			<td width="80%">
				<input type="radio" name="myfs_side" value="left" <?php if($value == 'left'){ echo 'checked'; } ?>/><br> 
			</td>
		</tr>
		<tr valign="middle">
			<td width="20%"><strong>In right side :</strong></td>
			<td width="80%">
				<input type="radio" name="myfs_side" value="right" <?php if($value == 'right'){ echo 'checked'; } ?>/><br> 
			</td>
		</tr>
		</table>
	
		<p class="submit">
		
			<!-- PalPay Button Donate -->
			<div style="float:right; display:inline;">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_donations">
					<input type="hidden" name="business" value="S6JD2HALWXNPS">
					<input type="hidden" name="lc" value="RO">
					<input type="hidden" name="currency_code" value="EUR">
					<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHosted">
					<center><input type="image" style="border:0px" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div> 
		
			<input type="submit" class="button-primary" value="Save Changes" />
		</p>
	</form>
	</div>
<?php	
}

// custom hook for the posts --
function my_social() {
	do_action('my_social');
}

function my_menu() {
	do_action('my_menu');
}


function my_template() {
	do_action('my_template');
}

// and now for the post output --
add_action('my_social'		, 'my_social_twitter');
add_action('my_menu'  		, 'my_menu_limit');
add_action('my_template'  	, 'my_sidebar_position');

function my_social_rss_feed() {
	return get_option('myfs_rss');
}

// feed output time --

function my_social_twitter() {
	return get_option('myfs_twitter');
}

function my_menu_limit() {
	return get_option('myfi_limit');
}

function my_sidebar_position(){
	if(get_option('myfs_side')){
		$result = get_option('myfs_side');
	}else{
		$result = _SIDE_;
	}
	
	return $result;
}
//GsL98DGtpo0W
?>