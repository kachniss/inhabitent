<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area content-page container">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' ); ?></p>

					<?php get_search_form(); ?>

					<h2><?php echo esc_html( 'Recent posts' ); ?></h2>
					<ul class="recent-post-list">
						<?php $posts_query = new WP_Query('posts_per_page=5');
							while ($posts_query->have_posts()) : $posts_query->the_post();
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; wp_reset_query(); ?>
					</ul>

					<h2><?php echo esc_html( 'Most used categories' ); ?></h2>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- #primary -->

<?php get_footer(); ?>
