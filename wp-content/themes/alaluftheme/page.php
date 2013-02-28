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
	
		<div id="content-posts" >
				
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_title( '<h1>', '</h1>' ); ?>
				
				<div class="main">
				<?php the_content(''); ?>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

<?php get_footer(); ?>