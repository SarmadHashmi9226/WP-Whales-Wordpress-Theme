<?php
/**
 * Functions 
 */
?>
<?php
function wp_whales_enqueue_assets() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap', false);
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/dist/style.css', [], '1.0', 'all');

    wp_enqueue_script(
        'wp-whales-bundle', 
        get_template_directory_uri() . '/dist/js/bundle.js', 
        [],  
        '1.0', 
        true  
    );
}
add_action('wp_enqueue_scripts', 'wp_whales_enqueue_assets');

// Theme support for thumbnails

add_theme_support( 'post-thumbnails' );

/**
 * Custom Footer Menu
 */
function register_footer_menus() {
    register_nav_menus([
        'footer_company' => __('Footer Company Menu'),
        'footer_services' => __('Footer Services Menu'),
        'footer_resources' => __('Footer Resources Menu'),
        'header_menu' => __('Header Navigation'),
        
    ]);
}
add_action('after_setup_theme', 'register_footer_menus');


//Files Required
require_once get_template_directory() . '/includes/service-post-type.php';
require_once get_template_directory() . '/includes/case-study-post-type.php';
require_once get_template_directory() . '/includes/engagement-model-post-type.php';
require_once get_template_directory() . '/includes/project-post-type.php';
require_once get_template_directory() . '/includes/testimonial-post-type.php';
