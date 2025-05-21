<?php
/**
 * Custom post type
 * Post Type Name: Tech Stack
 */

 function register_tech_stack_cpt() {
    $labels = array(
        'name' => 'Tech Stack',
        'singular_name' => 'Tech Item',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Tech Item',
        'edit_item' => 'Edit Tech Item',
        'new_item' => 'New Tech Item',
        'view_item' => 'View Tech Item',
        'search_items' => 'Search Tech Stack',
        'not_found' => 'No tech items found',
        'menu_name' => 'Tech Stack',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-screenoptions',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'tech-stack'),
        'show_in_rest' => true,
    );

    register_post_type('tech_stack', $args);
}
add_action('init', 'register_tech_stack_cpt');
