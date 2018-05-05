<?php
/**
 * The template for displaying front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="hero-image hero-home" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php the_post_thumbnail_url(); ?>)">
				<div class="main-logo"></div>
            </div>
            
            <div class="container">
                <h1>Shop Stuff</h1>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>