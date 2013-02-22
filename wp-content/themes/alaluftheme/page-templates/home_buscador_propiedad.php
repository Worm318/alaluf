<?php
/*
 * Template Name: Home + Buscador de Propiedades
 *
 */
get_header(); ?>
	
	
	<script language="javascript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/galleria-1.2.9.min.js"></script>
	
	<div id="slider-container">
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
			_fullScreenButton: true
		});
	});
	</script>

	<div id="side-menu">
		<div id="busqueda">
		<h3>Busqueda </h3>
		<button id="reset-button" class="intitle" type="button">Reset</button>
		<div id="operacion" class="opcion">
		<div class="etiqueta">Modalidad</div>
			<span id="buttons">
			<button id="venta-button" data-filter-value="venta" type="button">Venta</button>
			<button id="arriendo-button" data-filter-value="arriendo" type="button">Arriendo</button>
			</span>
		</div>

		<div class="opcion">
		<div class="etiqueta">Baños</div>
		<div class="layout">
		
			<div class="layout-slider">
				<input id="SliderBano" type="slider" name="bano" value="1;5" />
			</div>
			<div class="layout-checkbox">
				Activar<input id="bano-checkbox" type="checkbox" value="bano">
			</div>
		</div>
		</div>
		
		<div class="opcion">
		<div class="etiqueta">Habitaciones</div>
		<div class="layout">
		
			<div class="layout-slider">
			  <input id="SliderHab" type="slider" name="habitacion" value="1;5" />
			</div>
			<div class="layout-checkbox">
			Activar<input id="hab-checkbox" type="checkbox" value="habitacion">
			</div>
		</div>
		</div>
		
		<div class="opcion">
		<div class="etiqueta">Precio</div>
		<div class="layout">
		
			<div class="layout-slider">
			  <input id="SliderPrice" type="slider" name="habitacion" value="1000;100000" />
			</div>
			<div class="layout-checkbox">
			Activar<input id="price-checkbox" type="checkbox" value="precio">
			</div>
		</div>
		</div>
		
		<div class="opcion">
		<div class="etiqueta">Area</div>
		<div class="layout">
		
			<div class="layout-slider">
			  <input id="SliderArea" type="slider" name="habitacion" value="1;1000" />
			</div>
			<div class="layout-checkbox">
			Activar<input id="area-checkbox" type="checkbox" value="area">
			</div>
		</div>
		</div>
		
		
		<div class="opcion">
		<div id="tipo-et" class="etiqueta">Tipo de Propiedad</div>
		<div id="tipo">
			<input class="tipo-checkbox" type="checkbox" name="Casa" value="casa">Casa</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Oficina" value="oficina">Oficina</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Departamento" value="departamento">Departamento</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Local" value="local">Local</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Casa comercial" value="casacomercial">Casa comercial</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Terreno para proyecto" value="terrenoproyecto">Terrenos para proyectos</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Terreno Industrial" value="terrenoindustrial">Terrenos Industriales</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Galpon" value="galpon">Galpon</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Propiedades en renta" value="propiedadrenta">Propiedades en Renta</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Sitio" value="sitio">Sitio</input><br/>
			<input class="tipo-checkbox" type="checkbox" name="Parcelas y Fundos" value="parcela">Parcelas y Fundos</input><br/>
		</div>
		</div>
		
		
		<div class="opcion">
		<div class="etiqueta">Comuna</div>
		<input list="comunas" id="comuna" type="text" placeholder="La Florida, Maipu, Santiago, ">
			<datalist id="comunas">
			<option value="La Florida">
			<option value="Providencia">
			<option value="Santiago">
			<option value="Maipu">
			<option value="La Granja">
			</datalist>
		</div>
		
		<div id="reset"><button id="reset-button" type="button">Reset</button></div>
			
		<div id="filtros-actuales">			
		<!-- Hay algunos filtros que son marcas de las cosas de arriba. Hay otros sin embargo que sirven para filtrar. -->
			
		</div> 
		<hr>
		</div>
		
		<h3 id="prensa-title" class="clickable plegado">Prensa</h3>	
		<div id="recent-prensa-posts" class="postslista plegable hidden">
			<?php query_posts('category_name=prensa&showposts=10'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<a href="<?php the_permalink() ?>" ><li>
				<?php the_title(); ?></li></a>
				
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				
				<a href="prensa"><li id="see-all">Ver todos los posts</li></a>
				<?php else :?>
				<li>No se encontraron posts</li>	
				
				<?php endif; ?>
				
				
				
		</div>
		<h3>Entréguenos su propiedad</h3>	
		<h3>Videos Online</h3>	
		<h3 class="clickable plegado">Tips inmobiliarios</h3>	
		<div id="recent-tips-posts" class="postslista plegable hidden">
			<?php query_posts('category_name=tips&showposts=10'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<a href="<?php the_permalink() ?>" ><li>
				<?php the_title(); ?></li></a>
				
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				
				<a href="tips"><li id="see-all" >Ver todos los posts</li></a>
				<?php else :?>
				<li>No se encontraron posts</li>	
				
				<?php endif; ?>
				
				
				
		</div>
		<h3 class="clickable plegado">Enlaces de Interés</h3>	
		<div class="plegable hidden">
			<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
		</div>
		<h3>Preguntas frecuentes</h3>	
		
		<?php
		if ( !function_exists('dynamic_sidebar')	|| !dynamic_sidebar() ) :
		endif;
		?>
		
		
	</div>
	
	
			<div id="isotope-container">
				<div class="propiedad venta casa laflorida" habitaciones=1 banos=2 data-precio=10000 data-area="1000">
					<a href="propiedad?id=1">
					Venta casa en la florida $10000 blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh.
					
					</a>
					<button class="rem-propiedad">X</button>
				</div>
				
				<div class="propiedad arriendo casa laflorida" habitaciones=1 banos=1 data-precio=20000 data-area="500">
					Arriendo casa en la florida $20000 500m2 blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh.
					abla bla blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh
					<button class="rem-propiedad">X</button>
				</div>
				
				<div class="propiedad venta casa providencia"  habitaciones=5 banos=4 data-precio=5000 data-area="2000">
					Venta casa en providencia $5000 2000m2 Blabla bla blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh.
					<button class="rem-propiedad">X</button>
				</div>
				
				<div class="propiedad venta oficina providencia" habitaciones=2 banos=1 data-precio=8000 data-area="3000">
					Venta oficina en providencia $8000 3000m2Blabla bla blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh.
					<button class="rem-propiedad">X</button>
				</div>
				
				<div class="propiedad arriendo oficina santiago"  habitaciones=3 banos=3 data-precio=2000 data-area="20">
					arriendo oficina en santiago $2000 20m2 Blabla bla blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh.
					<button class="rem-propiedad">X</button>
				</div>
				
				<div class="propiedad venta sitio maipu" habitaciones=2 banos=2 data-precio=30000 data-area="300">
					venta sitio en maipu $30000 300m2 Blabla bla blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh.
					abla bla blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh
					<button class="rem-propiedad">X</button>
				</div>
				
				<div class="propiedad arriendo casa maipu" habitaciones=4 banos=4 data-precio=9001 data-area="100">
					arriendo casa en maipu $9001 100m2 Blabla bla blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh.
					<button class="rem-propiedad">X</button>
				</div>
				
				<div class="propiedad venta casa maipu" banos=5 habitaciones=5 data-precio=31415 data-area="274">
					venta casa en maipu $31415 274m2 Blabla bla blabla blablablabla blabla bla blabla blabla (blabla blabla bla) blablablablabla blabla bla bleh.
					<button class="rem-propiedad">X</button>
				</div>
				
			</div>

			
			<hr>
			


	
			
			
			
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	
	

<?php get_footer(); ?>

