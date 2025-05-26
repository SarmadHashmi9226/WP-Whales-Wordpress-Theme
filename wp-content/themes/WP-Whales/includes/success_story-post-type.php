<?php
/**
 * Custom post type
 * Post Type Name: Case Study 
 */
function register_success_stories_cpt() {
    register_post_type('success_story', [
        'labels' => [
            'name' => 'Success Stories',
            'singular_name' => 'Success Story',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'success-stories'],
        'menu_icon' => 'dashicons-star-filled',
    ]);
}
add_action('init', 'register_success_stories_cpt');
