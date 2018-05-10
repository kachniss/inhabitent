<?php
/**
 * The template for displaying product type taxonomy.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

            <?php 
            /**
             * source http://www.wpbeginner.com/wp-themes/how-to-show-the-current-taxonomy-title-url-and-more-in-wordpress/
             * 05/09/2018
             */
            ?>
            <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

            <header class = "entry-header products-heading">
                <h1><?php echo $term->name; ?></h1>
                <p><?php echo $term->description; ?></p>
            </header>



            <?php //while ( have_posts() ) : the_post(); ?>
            
			<?php //endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
