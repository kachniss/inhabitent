<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
 * change admin login logo (image, link, title)
 *  source https://codex.wordpress.org/Customizing_the_Login_Form 04/25/2018
 */
function change_login_logo() { 
	?> 
	<style type="text/css"> 
	body.login div#login h1 a {
	background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/inhabitent-logo-tent.svg); 
	margin-top: 30px; 
	} 
	</style>
	<?php 
}
add_action( 'login_enqueue_scripts', 'change_login_logo' );

function change_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'change_login_logo_url' );

function change_login_logo_url_title() {
	return get_bloginfo();
}
add_filter( 'login_headertitle', 'change_login_logo_url_title' );

/**
 * disable srcset on frontend
 * source: https://perishablepress.com/disable-wordpress-responsive-images/ 05/05/2018
*/
add_filter('max_srcset_image_width', create_function('', 'return 1;'));

// change archive title
function change_product_archive_title($title){
	if (is_post_type_archive('products')) {
		$title = "Shop stuff";
	}
	if (is_post_type_archive('adventures')) {
		$title = "Latest adventures";
	}
	return $title;
}
add_filter('get_the_archive_title', 'change_product_archive_title');

// add read more button
function insertReadMore($excerpt) {
	if(!is_feed() && is_home()) {
			$excerpt.= "<a href=";
			$excerpt.= get_permalink();
			$excerpt.= " class='btn inverse-btn read-more'>Read more</a>";
			echo $excerpt;
	}
	return;
}
add_filter ('the_excerpt', 'insertReadMore');

/** change reply to comment link
 * 
 */
function wpb_comment_reply_text( $link ) {
	$link = str_replace( '→', '', $link );
	return $link;
	}
	add_filter( 'comment_reply_link', 'wpb_comment_reply_text' );