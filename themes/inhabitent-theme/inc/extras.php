<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

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

/**
 * change archive title
*/
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

/**
 * add search button to main menu
 * source https://premium.wpmudev.org/blog/add-icons-wordpress-menus/ 05/17/2018
 */
function add_serch_button ( $items ) {
        $items .= '<a class = "search-button"><span class = "fas fa-search"></span></a>';
    return $items;
}
add_filter('wp_nav_menu_items', 'add_serch_button');


/**
 * comment validation
 * source https://wordpress.stackexchange.com/questions/7791/how-to-display-comment-form-error-messages-in-the-same-page?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa 05/17/2018
 */
function comment_validation_init() {
  if(is_single() && comments_open() ) { ?>        
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
    $('#commentform').validate({

    rules: {
      author: {
        required: true,
        minlength: 2
      },

      email: {
        required: true,
        email: true
      },

      comment: {
        required: true,
        minlength: 2
      }
    },

    messages: {
      author: "Please fill your name.",
      email: "Please enter a valid email address.",
      comment: "Please write a comment."
    },

    errorElement: "div",
    errorPlacement: function(error, element) {
      element.after(error);
    }

    });
    });
    </script>
    <?php
  }
}
add_action('wp_footer', 'comment_validation_init');