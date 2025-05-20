<?php
/**
 * Custom post type
 * Post Type Name: Projects
 */

 function register_projects_cpt() {
    register_post_type('project', [
        'labels' => [
            'name' => __('Projects'),
            'singular_name' => __('Project'),
        ],
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'project'],
        'supports' => ['title', 'editor'],
    ]);
}
add_action('init', 'register_projects_cpt');
