<?php
/**
 * Custom post type
 * Post Type Name: Case Study 
 */

 function create_case_study_post_type() {
    register_post_type('case_study',
        array(
            'labels' => array(
                'name' => __('Case Studies'),
                'singular_name' => __('Case Study')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_case_study_post_type');