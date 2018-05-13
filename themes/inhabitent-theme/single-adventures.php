<?php
/**
 * The template for displaying all single adventures.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="hero-image hero-adventures" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php the_post_thumbnail_url(); ?>)">
                </div>

                <div class="single-page-content">
                    <h1><?php the_title(); ?></h1>
                    <span class = "post-author">by <?php the_author(); ?></span>
                    <?php the_content(); ?>
                    <div class = "social-links">
                        <a class = "btn inverse-btn"><span class="fab fa-facebook-f"></span>like</a>
                        <a class = "btn inverse-btn"><span class="fab fa-twitter"></span>tweet</a>
                        <a class = "btn inverse-btn"><span class="fab fa-pinterest"></span>pin</a>
                    </div>
                </div>
                

            <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->
	
<?php get_footer(); ?>
