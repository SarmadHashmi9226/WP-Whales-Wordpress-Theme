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

// Theme supposrt for thumbnails

add_theme_support( 'post-thumbnails' );

require_once get_template_directory() . '/includes/service-post-type.php';
require_once get_template_directory() . '/includes/case-study-post-type.php';
