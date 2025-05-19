<?php
/**
 * Custom post type
 * Post Type Name: Services 
 */

 function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'service', 'Post Type General Name', 'wp-whales' ),
		'singular_name'         => _x( 'Services', 'Post Type Singular Name', 'wp-whales' ),
		'menu_name'             => __( 'Services', 'wp-whales' ),
		'name_admin_bar'        => __( 'Services', 'wp-whales' ),
		'archives'              => __( 'Item Archives', 'wp-whales' ),
		'attributes'            => __( 'Item Attributes', 'wp-whales' ),
		'parent_item_colon'     => __( 'Parent Item:', 'wp-whales' ),
		'all_items'             => __( 'All Items', 'wp-whales' ),
		'add_new_item'          => __( 'Add New Item', 'wp-whales' ),
		'add_new'               => __( 'Add New', 'wp-whales' ),
		'new_item'              => __( 'New Item', 'wp-whales' ),
		'edit_item'             => __( 'Edit Item', 'wp-whales' ),
		'update_item'           => __( 'Update Item', 'wp-whales' ),
		'view_item'             => __( 'View Item', 'wp-whales' ),
		'view_items'            => __( 'View Items', 'wp-whales' ),
		'search_items'          => __( 'Search Item', 'wp-whales' ),
		'not_found'             => __( 'Not found', 'wp-whales' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wp-whales' ),
		'featured_image'        => __( 'Featured Image', 'wp-whales' ),
		'set_featured_image'    => __( 'Set featured image', 'wp-whales' ),
		'remove_featured_image' => __( 'Remove featured image', 'wp-whales' ),
		'use_featured_image'    => __( 'Use as featured image', 'wp-whales' ),
		'insert_into_item'      => __( 'Insert into item', 'wp-whales' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wp-whales' ),
		'items_list'            => __( 'Items list', 'wp-whales' ),
		'items_list_navigation' => __( 'Items list navigation', 'wp-whales' ),
		'filter_items_list'     => __( 'Filter items list', 'wp-whales' ),
	);
	$args = array(
		'label'                 => __( 'Services', 'wp-whales' ),
		'description'           => __( 'Services', 'wp-whales' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
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
	register_post_type( 'services', $args );

}
add_action( 'init', 'custom_post_type', 0 );