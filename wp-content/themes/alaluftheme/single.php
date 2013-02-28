<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */

get_header(); ?>
	
<?php get_sidebar(); ?>
	
					<?php while ( have_posts() ) : the_post(); ?>
					
					<div id="content-posts">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					
					<div id="post">
						<?php the_content(''); ?>
					</div>
					
					
					<div id="sup-comentarios">
					<div id="comentarios">
									
						<?php comments_template( '', true ); ?>					
						
					</div>
					</div>
					</div>

				<?php endwhile; // end of the loop. ?>

				
<?php get_footer(); ?>