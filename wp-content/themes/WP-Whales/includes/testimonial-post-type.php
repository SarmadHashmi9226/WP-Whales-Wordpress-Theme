<?php
/**
 * Custom Post Type
 * 
 * Post Type Name: Testimonial
 */

 function register_testimonial_cpt() {
    $labels = [
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonials',
        'not_found' => 'No testimonials found',
    ];

    $args = [
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-testimonial',
        'has_archive' => false,
    ];

    register_post_type('testimonial', $args);
}
add_action('init', 'register_testimonial_cpt');
