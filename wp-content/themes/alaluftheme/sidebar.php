<div id="side-menu">
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