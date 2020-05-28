<?php
/**
 * Load Scripts
 */
add_action( 'wp_enqueue_scripts', function() {
    // wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', '', 1.0, false);
    
    wp_enqueue_script('simpleParallax' , get_stylesheet_directory_uri() . '/plugins/simpleParallax/simpleParallax.js', '', 1.0, false);
    wp_enqueue_script('swiper' , get_stylesheet_directory_uri() . '/plugins/swiper/swiper.min.js', '', 1.0, false);

    wp_enqueue_script('script' , get_stylesheet_directory_uri() . '/script.js', '', 1.0, false);
});
