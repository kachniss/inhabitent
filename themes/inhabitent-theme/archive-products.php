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

            <?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content' ); ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

            <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
