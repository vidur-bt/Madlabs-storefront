<?php

function madlabs_enqueue_styles() {
    wp_enqueue_style( 'madlabs-style', get_stylesheet_directory_uri() . '/assets/styles/output.css', array(), filemtime( get_stylesheet_directory() . '/assets/styles/output.css' ) );
    wp_enqueue_style( 'splide-min-css', get_stylesheet_directory_uri() . '/assets/styles/splide.min.css', array() );
}
add_action( 'wp_enqueue_scripts', 'madlabs_enqueue_styles' );

function madlabs_enqueue_scripts() {
    wp_enqueue_script('splide-min-js',get_stylesheet_directory_uri() . '/assets/js/splide.min.js', ['jquery'], true);
    
    if(is_page('home')){
        wp_enqueue_script(
            'home-js', // Unique handle name
            get_stylesheet_directory_uri() . '/assets/js/home.js', // Script URL
            array('jquery'), // Dependencies (can be empty array if none)
            '1.0.0', // Script version (optional)
            true // Load in footer (true) or header (false)
        );
    }
    wp_enqueue_script(
        'script-js', // Unique handle name
        get_stylesheet_directory_uri() . '/assets/js/script.js', // Script URL
        array('jquery'), // Dependencies (can be empty array if none)
        '1.0.0', // Script version (optional)
        true // Load in footer (true) or header (false)
    );
    wp_enqueue_script(
        'product-js', // Unique handle name
        get_stylesheet_directory_uri() . '/assets/js/product.js', // Script URL
        array('jquery'), // Dependencies (can be empty array if none)
        '1.0.0', // Script version (optional)
        true // Load in footer (true) or header (false)
    );
    wp_enqueue_script(
        'tw-element-js', // Unique handle name
        'https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1', // Script URL
        array(), // Dependencies (can be empty array if none)
        '1.0.0', // Script version (optional)
        true // Load in footer (true) or header (false)
    );
    
}
add_action('wp_enqueue_scripts', 'madlabs_enqueue_scripts');


function custom_dequeue_storefront_styles() {
    wp_dequeue_style( 'storefront-style' );
    wp_deregister_style( 'storefront-style' );

    wp_dequeue_style( 'storefront-fonts' );
    wp_deregister_style( 'storefront-fonts' );

    wp_dequeue_style( 'storefront-icons' );
    wp_deregister_style( 'storefront-icons' );
}
add_action( 'wp_enqueue_scripts', 'custom_dequeue_storefront_styles', 20 );

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // WooCommerce block styles, if present
}, 100 );

remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );


?>