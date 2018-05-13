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
					<h1 class="page-title">Oops! That page can&rsquo;t be found.</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>

					<?php get_search_form(); ?>

					<h2>Recent posts</h2>
					<ul class="recent-post-list">
						<?php $posts_query = new WP_Query('posts_per_page=5');
							while ($posts_query->have_posts()) : $posts_query->the_post();
						?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; wp_reset_query(); ?>
					</ul>

					<h2>Most used categories</h2>
					<?php 
						$args = array(
							'number' => 4,
							'orderby' => 'count',
							'order'=> 'DESC',
							'show_count' => 1,
							'title_li' => 0,
						);
					?>
					<ul class = "recent-post-list">
						<?php wp_list_categories($args); ?>
					</ul>
					<h2>Archives</h2>
					<p>Try looking in the monthly archives. &#x1F642;</p>
					<?php $args = array(
						'type'            => 'monthly',
						'limit'           => '',
						'format'          => 'option', 
						'before'          => '',
						'after'           => '',
						'show_post_count' => false,
						'echo'            => 1,
						'order'           => 'DESC',
						'post_type'     => 'post'
					); ?>

					<select class = "archive-select" >
						<option value=""> Select Month </option>
						<?php wp_get_archives( $args ); ?>
					</select>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- #primary -->

<?php get_footer(); ?>
