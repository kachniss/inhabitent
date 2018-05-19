<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
		<div class = "social-links">
			<a class = "btn inverse-btn"><span class="fab fa-facebook-f"></span>like</a>
			<a class = "btn inverse-btn"><span class="fab fa-twitter"></span>tweet</a>
			<a class = "btn inverse-btn"><span class="fab fa-pinterest"></span>pin</a>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
