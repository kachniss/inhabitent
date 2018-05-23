<?php
/**
 * The template for displaying products.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

            <header class = "entry-header products-heading">
                <h1><?php the_archive_title(); ?></h1>
                <ul class = "main-navigation products-navigation">
                    <?php

                    $terms = get_terms([
                        'taxonomy' => 'product-type',
                        'hide_empty' => false,
                    ]);

                    foreach ( $terms as $term ) {
                        echo '<li><a href=' . get_term_link($term) . '>' . $term->name . '</a></li>';
                    }
                    ?>
                </ul>
            </header>

            <div class = "entry-container">
                <?php
                    $args = array( 
                        'post_type' => 'products',
                        'posts_per_page' => -1, 
                        'orderby'=> 'title', 
                        'order' => 'ASC',
                    ); 
                    $products = new WP_Query( $args );
                ?>
                    <?php if ( $products->have_posts() ) : ?>
                        <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                        <div class = "entry-post">
                            <div class = "entry-thumbnail" style = "background-image: url(<?php echo CFS()->get('image'); ?>) ">
                                <a href= <?php the_permalink(); ?>></a>
                            </div>
                            <div class="entry-info product-info">
                                <span><?php the_title(); ?></span>
                                <span class = "aligncenter">&nbsp;</span>
                                <span><?php echo "\$" . CFS()->get('price'); ?></span>
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
