<?php
/**
 * The template for displaying adventures.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main adventures" role="main">

			<header class = "entry-header products-heading">
                <h1><?php the_archive_title(); ?></h1>
            </header>

            <div class = "entry-container">
                <?php
                    $args = array( 
                        'post_type' => 'adventures',
                        'posts_per_page' => 4, 
                    ); 
                    $adventures = new WP_Query( $args );
                ?>
                <?php if ( $adventures->have_posts() ) : ?>
                    <?php while ( $adventures->have_posts() ) : $adventures->the_post(); ?>
                    <div class = "adventure"  style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php the_post_thumbnail_url(); ?>)">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink(); ?>" class="btn transparent-btn">Read more</a>
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
