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
		<h3 class="clickable plegado">Videos Online</h3>	
		
		<div class="postslista plegable hidden">
		<?php
				
					$id = NULL;
					$username = 'AlalufPropiedades';
					
						$xml = @simplexml_load_file(sprintf('http://gdata.youtube.com/feeds/base/users/%s/uploads?alt=rss&v=2&orderby=published', $username));
					if ( $xml !== false ){	
						if ( ! empty($xml->channel->item[0]->link) )
						{
						  parse_str(parse_url($xml->channel->item[0]->link, PHP_URL_QUERY), $url_query);

						  if ( ! empty($url_query['v']) )
							$id = $url_query['v'];
						}
					
			?>
		
		<iframe id="ytplayer" type="text/html" width="216" height="216"
		src="http://www.youtube.com/embed/<?php echo $id?>?&origin=http://example.com"
		frameborder="0" /></iframe>
		<?php 
		}else{
		?>
		<li>No se pudo cargar el video</li>
		<?php
		}
		?>
		
		<a href="https://www.youtube.com/user/AlalufPropiedades" target="_blank"><li id="see-all" >Canal de Alaluf</li></a>
		</div>
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
		<a class="link" href="preguntas-frecuentes"><h3>Preguntas frecuentes</h3></a>

		<?php
		if ( !function_exists('dynamic_sidebar')	|| !dynamic_sidebar() ) :
		endif;
		?>

</div>