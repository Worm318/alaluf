<?php
/*
 * Template Name: Proyectos Inmobiliarios
 *
 */
get_header(); ?>
	

	

	
	<div id="content-posts" style="width:100%">
	<div id="slider-container" class="proyectos">
	<?php 
		$args = array(
		'post_type' => 'attachment',
		'numberposts' => null,
		'post_status' => null,
		'post_parent' => $post->ID
	); 
	$attachments = get_posts($args);
	if ($attachments) {
		foreach ($attachments as $attachment) {
			//echo apply_filters('the_title', $attachment->post_title);
			$src = wp_get_attachment_image_src($attachment->ID, 'full');?>
			<img src="<?php echo $src['0']; ?>"
				data-title="<?php echo $attachment->post_title; ?>"
				data-description="<?php echo $attachment->post_content;?>" />
	<?php	}
	}?>
	</div>
	
	<script>
	jQuery(document).ready(function($){
		Galleria.loadTheme('<?php bloginfo('template_url'); ?>/js/galleriatheme/galleria.alaluf.js');
		Galleria.run('#slider-container',{
			autoplay: 5000,
			imageCrop: 'width',
			_fullScreenButton: true,
		});
	});
	</script>
	
	</div>
	


	

<?php get_footer(); ?>