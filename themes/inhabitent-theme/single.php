<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area content-page container">
		<main id="main" class="site-main journal" role="main">

		<button type="button" id="close-comments">Close Comments</button>
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- #primary -->
	
<?php get_footer(); ?>
