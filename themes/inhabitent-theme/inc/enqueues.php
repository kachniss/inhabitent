<?php
/**
 * Enqueue scripts and styles.
 */
function inhabitent_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'inhabitent-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_style( 'inhabitent-font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );
	wp_enqueue_script( 'inhabitent-main-js', get_template_directory_uri() . '/build/js/main.min.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'red_comments', get_template_directory_uri() . '/build/js/app.min.js', array( 'jquery' ), false, true );
  	wp_localize_script( 'red_comments', 'red_vars', array(
      'rest_url' => esc_url_raw( rest_url() ),
      'wpapi_nonce' => wp_create_nonce( 'wp_rest' ),
      'post_id' => get_the_ID()
  	) );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_scripts' );


?>