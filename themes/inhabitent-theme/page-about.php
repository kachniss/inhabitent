<?php
/**
 * The template for displaying about page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="hero-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url(<?php the_post_thumbnail_url(); ?>)">
				<h1 class="hero-heading"><?php the_title(); ?></h1>
			</div>
			
			<div class="about-page-content">
				<?php
					$page = get_page_by_title( get_the_title());
					$content = apply_filters('the_content', $page->post_content); 
					echo $content;
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>