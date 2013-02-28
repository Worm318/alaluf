<?php
/*
 * Template Name: Servicios
 *
 */
get_header(); ?>

<?php get_sidebar(); ?>


<script>
		jQuery(document).ready(function($){
			var primero = true;
			
			function init( margin ){
				var ancho = margin;
				var altura = margin;
				var primero = true;
				var max_ancho = Math.max( $('#servicio-container').width(), $('.icono').width() );
				
				$('.descripcion').css('position','absolute');
				$('.descripcion').css('top', margin );
				$('.descripcion').css('left', $('.icono').width() + 2*margin);
				
				$('.icono').each( function(){
					if( ancho + $(this).width() > max_ancho ){
						ancho = margin;
						altura += Math.max( $('.icono').height() ) + margin;
					}
					$(this).css('left',ancho);
					
					//console.log("top:"($(this).index()/2)%2 );
					
					$(this).css('top',altura + ($(this).height() + margin)*($(this).index()/2%2));
					ancho += $(this).width() + margin;
				});
			}
			
			init( 15 );
				
			<!--Iconos-->
			$(".icono").click(function(event){
				event.preventDefault();
				
				var sub = $(this).next();
				if(sub.hasClass('active')){
					return;
				}
				
				if(primero){
					animar_iconos();
					sub.addClass('active');
					sub.show(500);
					primero = false;
				}else{
						$(".descripcion.active").hide(500,'linear');
						$(".descripcion.active").removeClass('active');
						sub.addClass('active');
						sub.show(500);
					
				}
			});
				
			function animar_iconos() {
				var altura = 15;
				var margin= 15;
				
				$('.icono').each(function(){
						console.log(altura);
						$(this).animate({'left':'0px','top':altura},1500);
						altura += $(this).height() + margin;
				});
				
				$('#servicio-container').animate({'height':altura},1500);
				
				
				console.log('altura final:'+altura);
				
				
			}
		});			
</script>


<div id="content-posts">

<?php while ( have_posts() ) : the_post(); ?>
				<?php the_title( '<h1 class="servicio">', '</h1>' ); ?>
				<div class="main servicio">
				<?php the_content(''); ?>
				</div>
<?php endwhile; // end of the loop. ?>

	
	<div id="servicio-container">
	<?php
		$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

		foreach( $mypages as $page ) {
			$content = $page->post_content;		
			
			if ( ! $content ) // Check for empty page
				continue;
			
			$content = apply_filters('the_content', $content);
			
		?>
		
		<img class="icono" src="<?php echo get_bloginfo('template_directory').'/images/servicio/icono-'.$page->ID.'.png';?>"
			title="<?php echo $page->post_title; ?>"
			onerror='this.src="<?php echo get_bloginfo('template_directory').'/images/servicio/icono-none.png';?>"' />
		<div class="descripcion">
			<h2 class="servicio"><?php echo $page->post_title; ?></h2>
			<div class="entry servicio"><?php echo $content; ?></div>
		</div>
		<?php
		}	
	?>
	</div>


</div>

<?php get_footer(); ?>

