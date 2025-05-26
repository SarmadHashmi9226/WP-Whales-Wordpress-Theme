<?php
/**
 * Custom post type
 * Post Type Name: Case Study 
 */

 function create_success_story_post_type() {
    register_post_type('success_story',
    array(
        'labels' => array(
            'name' => __('Success Story'),
            'singular_name' => __('Success Story')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        
    )
);

}
add_action('init', 'create_success_story_post_type');