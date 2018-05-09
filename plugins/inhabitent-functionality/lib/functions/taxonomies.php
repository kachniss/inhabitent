<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Product Type Taxonomy
function product_type_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'Inhabitent' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'Inhabitent' ),
		'menu_name'                  => __( 'Product Types', 'Inhabitent' ),
		'all_items'                  => __( 'All Product Types', 'Inhabitent' ),
		'parent_item'                => __( 'Parent Product Type', 'Inhabitent' ),
		'parent_item_colon'          => __( 'Parent Item:', 'Inhabitent' ),
		'new_item_name'              => __( 'New Product Type Name', 'Inhabitent' ),
		'add_new_item'               => __( 'Add New Product Type', 'Inhabitent' ),
		'edit_item'                  => __( 'Edit Product Type', 'Inhabitent' ),
		'update_item'                => __( 'Update Product Type', 'Inhabitent' ),
		'view_item'                  => __( 'View Product Type', 'Inhabitent' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'Inhabitent' ),
		'add_or_remove_items'        => __( 'Add or remove Product Type', 'Inhabitent' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'Inhabitent' ),
		'popular_items'              => __( 'Popular Product Types', 'Inhabitent' ),
		'search_items'               => __( 'Search Product Types', 'Inhabitent' ),
		'not_found'                  => __( 'Not Found', 'Inhabitent' ),
		'no_terms'                   => __( 'No Product Types', 'Inhabitent' ),
		'items_list'                 => __( 'Product Type list', 'Inhabitent' ),
		'items_list_navigation'      => __( 'Product Type list navigation', 'Inhabitent' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'product_type_taxonomy', 0 );