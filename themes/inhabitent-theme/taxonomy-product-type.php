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

            <div class = "entry-container">
                <?php
                    $args = array( 
                        'post_type' => 'products',
                        'posts_per_page' => -1, 
                        'orderby'=> 'title', 
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product-type',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            )
                        ),
                    ); 
                    $products = new WP_Query( $args );
                ?>
                <?php if ( $products->have_posts() ) : ?>
                    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                        <div class = "entry-post product-post">
                            <div class = "entry-thumbnail" style = "background-image: url(<?php echo CFS()->get('image'); ?>) ">
                                <a href= <?php the_permalink(); ?>></a>
                            </div>
                            <div class="entry-info">
                                <span class = "alignleft"><?php the_title(); ?></span>
                                <span class = "aligncenter">&nbsp;</span>
                                <span class = "alignright"><?php echo "\$" . CFS()->get('price'); ?></span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <h2>Nothing found!</h2>
                <?php endif; ?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
