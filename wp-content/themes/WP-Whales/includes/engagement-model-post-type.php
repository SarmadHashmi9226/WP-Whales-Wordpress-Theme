<?php
/**
 * Custom Post Type
 * 
 * POst Type Name: Engagement Model
 */

 function register_engagement_models_cpt() {
    register_post_type('engagement_model', [
        'labels' => [
            'name' => __('Engagement Models'),
            'singular_name' => __('Engagement Model'),
        ],
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'engagement-model'],
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
}
add_action('init', 'register_engagement_models_cpt');
