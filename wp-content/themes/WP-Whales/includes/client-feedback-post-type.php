<?php
/**
 * Custom Post Type
 * 
 * Post Type Name: client feedback
 */

 function register_client_feedback_cpt() {

    $labels = array(
        'name'                  => _x( 'Client Feedback', 'Post type general name', 'wp_whales' ),
        'singular_name'         => _x( 'Client Feedback', 'Post type singular name', 'wp_whales' ),
        'menu_name'             => _x( 'Client Feedback', 'Admin Menu text', 'wp_whales' ),
        'name_admin_bar'        => _x( 'Client Feedback', 'Add New on Toolbar', 'wp_whales' ),
        'add_new'               => __( 'Add New', 'wp_whales' ),
        'add_new_item'          => __( 'Add New Feedback', 'wp_whales' ),
        'new_item'              => __( 'New Feedback', 'wp_whales' ),
        'edit_item'             => __( 'Edit Feedback', 'wp_whales' ),
        'view_item'             => __( 'View Feedback', 'wp_whales' ),
        'all_items'             => __( 'All Feedback', 'wp_whales' ),
        'search_items'          => __( 'Search Feedback', 'wp_whales' ),
        'parent_item_colon'     => __( 'Parent Feedback:', 'wp_whales' ),
        'not_found'             => __( 'No feedback found.', 'wp_whales' ),
        'not_found_in_trash'    => __( 'No feedback found in Trash.', 'wp_whales' ),
        'featured_image'        => _x( 'Client Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wp_whales' ),
        'set_featured_image'    => _x( 'Set client image', 'Overrides the “Set featured image” phrase', 'wp_whales' ),
        'remove_featured_image' => _x( 'Remove client image', 'Overrides the “Remove featured image” phrase', 'wp_whales' ),
        'use_featured_image'    => _x( 'Use as client image', 'Overrides the “Use as featured image” phrase', 'wp_whales' ),
        'archives'              => _x( 'Client Feedback archives', 'The post type archive label', 'wp_whales' ),
        'insert_into_item'      => _x( 'Insert into feedback', 'Overrides the “Insert into post” phrase', 'wp_whales' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this feedback', 'Overrides the “Uploaded to this post” phrase', 'wp_whales' ),
        'filter_items_list'     => _x( 'Filter feedback list', 'Screen reader text for the filter links', 'wp_whales' ),
        'items_list_navigation' => _x( 'Feedback list navigation', 'Screen reader text for the pagination', 'wp_whales' ),
        'items_list'            => _x( 'Feedback list', 'Screen reader text for the items list', 'wp_whales' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'client-feedback' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-testimonial',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
        'show_in_rest'       => true, 
    );

    register_post_type( 'client_feedback', $args );
}
add_action( 'init', 'register_client_feedback_cpt' );
