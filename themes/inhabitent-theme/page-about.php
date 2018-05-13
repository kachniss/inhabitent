<?php
/**
 * The template for displaying about page.
 *
 * @package Inhabitent_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php the_post_thumbnail_url(); ?>)">
					<h1 class="hero-heading">
						<?php the_title(); ?>
					</h1>
				</div>
				
				<div class="single-page-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>