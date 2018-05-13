<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Product Custom Post Type
function products_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'inhabitent-theme' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'inhabitent-theme' ),
		'menu_name'             => __( 'Products', 'inhabitent-theme' ),
		'name_admin_bar'        => __( 'Products', 'inhabitent-theme' ),
		'archives'              => __( 'Product Archives', 'inhabitent-theme' ),
		'attributes'            => __( 'Product Attributes', 'inhabitent-theme' ),
		'parent_item_colon'     => __( 'Parent Product:', 'inhabitent-theme' ),
		'all_items'             => __( 'All Products', 'inhabitent-theme' ),
		'add_new_item'          => __( 'Add New Product', 'inhabitent-theme' ),
		'add_new'               => __( 'Add New', 'inhabitent-theme' ),
		'new_item'              => __( 'New Product', 'inhabitent-theme' ),
		'edit_item'             => __( 'Edit Product', 'inhabitent-theme' ),
		'update_item'           => __( 'Update Product', 'inhabitent-theme' ),
		'view_item'             => __( 'View Product', 'inhabitent-theme' ),
		'view_items'            => __( 'View Product', 'inhabitent-theme' ),
		'search_items'          => __( 'Search Product', 'inhabitent-theme' ),
		'not_found'             => __( 'Not found', 'inhabitent-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'inhabitent-theme' ),
		'featured_image'        => __( 'Featured Image', 'inhabitent-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'inhabitent-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'inhabitent-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'inhabitent-theme' ),
		'insert_into_item'      => __( 'Insert into Product', 'inhabitent-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'inhabitent-theme' ),
		'items_list'            => __( 'Products list', 'inhabitent-theme' ),
		'items_list_navigation' => __( 'Products list navigation', 'inhabitent-theme' ),
		'filter_items_list'     => __( 'Filter Products list', 'inhabitent-theme' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'inhabitent-theme' ),
		'description'           => __( 'This is a custom post type for our product', 'inhabitent-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'products_custom_post_type', 0 );

// Register Custom Post Type
function adventures_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Adventures', 'Post Type General Name', 'inhabitent-theme' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'inhabitent-theme' ),
		'menu_name'             => __( 'Adventures', 'inhabitent-theme' ),
		'name_admin_bar'        => __( 'Adventures', 'inhabitent-theme' ),
		'archives'              => __( 'Adventure Archives', 'inhabitent-theme' ),
		'attributes'            => __( 'Adventure Attributes', 'inhabitent-theme' ),
		'parent_item_colon'     => __( 'Parent Adventures:', 'inhabitent-theme' ),
		'all_items'             => __( 'All Adventures', 'inhabitent-theme' ),
		'add_new_item'          => __( 'Add New Adventure', 'inhabitent-theme' ),
		'add_new'               => __( 'Add New', 'inhabitent-theme' ),
		'new_item'              => __( 'New Adventure', 'inhabitent-theme' ),
		'edit_item'             => __( 'Edit Adventure', 'inhabitent-theme' ),
		'update_item'           => __( 'Update Adventure', 'inhabitent-theme' ),
		'view_item'             => __( 'View Adventure', 'inhabitent-theme' ),
		'view_items'            => __( 'View Adventures', 'inhabitent-theme' ),
		'search_items'          => __( 'Search Adventure', 'inhabitent-theme' ),
		'not_found'             => __( 'Not found', 'inhabitent-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'inhabitent-theme' ),
		'featured_image'        => __( 'Featured Image', 'inhabitent-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'inhabitent-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'inhabitent-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'inhabitent-theme' ),
		'insert_into_item'      => __( 'Insert into Adventure', 'inhabitent-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Adventure', 'inhabitent-theme' ),
		'items_list'            => __( 'Adventures list', 'inhabitent-theme' ),
		'items_list_navigation' => __( 'Adventures list navigation', 'inhabitent-theme' ),
		'filter_items_list'     => __( 'Filter Adventures list', 'inhabitent-theme' ),
	);
	$args = array(
		'label'                 => __( 'Adventure', 'inhabitent-theme' ),
		'description'           => __( 'Post Type Description', 'inhabitent-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'adventures', $args );

}
add_action( 'init', 'adventures_custom_post_type', 0 );