<?php
/**
 * The template for displaying front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main home_page" role="main">

            <div class="hero-image hero-home" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php the_post_thumbnail_url(); ?>)">
				<div class="main-logo"></div>
            </div>
            
            <div class="container">
                <h1>Shop Stuff</h1>

                <div class="entry-container">

                    <?php
                    $terms = get_terms([
                        'taxonomy' => 'product-type',
                        'hide_empty' => false,
                    ]); ?>

                    <?php foreach ( $terms as $term ): ?>
                        <div class = "entry-post product-category-entry">
                            <img src= <?php echo bloginfo('template_url') . "/assets/images/product-type-icons/" . $term->slug . ".svg"; ?> />
                            <p> <?php echo $term->description ?> </p>
                            <a href = " <?php echo get_term_link($term); ?> " class = "btn shop-btn"><?php echo $term->name . " stuff" ?></a>
                        </div>

                    <?php endforeach; ?>
                </div>

                <h1>Inhabitent Journal</h1>
                <?php $posts_query = new WP_Query('posts_per_page=3');?>

                <div class="entry-container journal-entry-container">
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
                                <a href="<?php the_permalink(); ?>" class="btn inverse-btn">Read entry</a>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>