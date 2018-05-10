<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Product Custom Post Type
function product_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'Inhabitent' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'Inhabitent' ),
		'menu_name'             => __( 'Products', 'Inhabitent' ),
		'name_admin_bar'        => __( 'Products', 'Inhabitent' ),
		'archives'              => __( 'Product Archives', 'Inhabitent' ),
		'attributes'            => __( 'Product Attributes', 'Inhabitent' ),
		'parent_item_colon'     => __( 'Parent Product:', 'Inhabitent' ),
		'all_items'             => __( 'All Products', 'Inhabitent' ),
		'add_new_item'          => __( 'Add New Product', 'Inhabitent' ),
		'add_new'               => __( 'Add New', 'Inhabitent' ),
		'new_item'              => __( 'New Product', 'Inhabitent' ),
		'edit_item'             => __( 'Edit Product', 'Inhabitent' ),
		'update_item'           => __( 'Update Product', 'Inhabitent' ),
		'view_item'             => __( 'View Product', 'Inhabitent' ),
		'view_items'            => __( 'View Product', 'Inhabitent' ),
		'search_items'          => __( 'Search Product', 'Inhabitent' ),
		'not_found'             => __( 'Not found', 'Inhabitent' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Inhabitent' ),
		'featured_image'        => __( 'Featured Image', 'Inhabitent' ),
		'set_featured_image'    => __( 'Set featured image', 'Inhabitent' ),
		'remove_featured_image' => __( 'Remove featured image', 'Inhabitent' ),
		'use_featured_image'    => __( 'Use as featured image', 'Inhabitent' ),
		'insert_into_item'      => __( 'Insert into Product', 'Inhabitent' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'Inhabitent' ),
		'items_list'            => __( 'Products list', 'Inhabitent' ),
		'items_list_navigation' => __( 'Products list navigation', 'Inhabitent' ),
		'filter_items_list'     => __( 'Filter Products list', 'Inhabitent' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'Inhabitent' ),
		'description'           => __( 'This is a custom post type for our product', 'Inhabitent' ),
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
add_action( 'init', 'product_custom_post_type', 0 );