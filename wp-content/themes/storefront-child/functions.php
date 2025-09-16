<?php

function madlabs_enqueue_styles() {
    wp_enqueue_style( 'madlabs-style', get_stylesheet_directory_uri() . '/assets/styles/output.css', array() );
    wp_enqueue_style( 'splide-min-css', get_stylesheet_directory_uri() . '/assets/styles/splide.min.css', array() );

    wp_enqueue_script('splide-min-js',get_stylesheet_directory_uri() . '/assets/js/splide.min.js', ['jquery'], true);
}
add_action( 'wp_enqueue_scripts', 'madlabs_enqueue_styles' );

function madlabs_enqueue_scripts(){

}

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