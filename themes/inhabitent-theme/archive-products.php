<?php
/**
 * The template for displaying products.
 *
 * @package RED_Starter_Theme
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

            <div class = "products-container">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class = "product-thumbnail">
                        <img src = <?php echo CFS()->get('image'); ?> />
                        <p>
                            <?php
                                the_title();
                                echo "\$" . CFS()->get('price');
                            ?>

                        </p>
                    </div>

                <?php endwhile; ?>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
