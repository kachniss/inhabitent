<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area content-page container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php 
                $image = CFS()->get( 'image' );
                $price = CFS()->get( 'price' );
                $excerpt = CFS()->get( 'excerpt' );
                echo "<img src = $image class = \"product-imgage\" />";
                echo "<p class = \"product-price\">Price: \${$price}</p>";
                echo "<p class = \"product-excerpt\">{$excerpt}</p>";
                
            ?>

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
