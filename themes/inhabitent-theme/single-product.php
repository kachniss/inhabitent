<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main single-product-page" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php 
                $image = CFS()->get( 'image' );
                $price = CFS()->get( 'price' );
			?>

			<div class = "single-product-image">
				<?php echo "<img src = $image />"; ?>
			</div>

			<div class = "single-product-content">
				<h1><?php echo get_the_title();?></h1>

				<?php echo "<p class = \"single-product-price\">\${$price}</p>"; ?>
				<p><?php echo get_the_content(); ?></p>

			</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->
	
<?php get_footer(); ?>
