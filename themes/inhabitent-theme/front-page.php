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
            
            
                <?php
                    $args = array( 
                        'post_type' => 'products', 
                        'order' => 'DESC', 
                        'posts_per_page' => 3 
                    );
                    $products = new WP_Query( $args ); // instantiate our object
                ?>
                <?php if ( $products->have_posts() ) : ?>
                <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                    <?php
                        //the_title();
                        //the_content();
                    ?>
                    <br>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <h2>Nothing found!</h2>
                <?php endif; ?>

                <h1>Inhabitent Journal</h1>
                <?php $posts_query = new WP_Query('posts_per_page=3');?>

                <div class="entry-container">
                    <?php while ($posts_query->have_posts()) : $posts_query->the_post();?>
                        <div class = "entry-post journal-post">
                            <div class = "entry-thumbnail" style = "background-image: url(<?php the_post_thumbnail_url(); ?>) ">
                            </div>
                            <div class="entry-info">
                                <p>
                                    <?php
                                        the_date();
                                        echo " / ";
                                        comments_number('0 Comments');
                                    ?>
                                </p>
                        
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <a href="<?php the_permalink(); ?>" class="read-btn">Read entry</a>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>