<?php
/**
 * Templeton Blocks functions and definitions
 */

// Enqueue Google Fonts
function templeton_blocks_enqueue_fonts() {
    wp_enqueue_style(
        'templeton-blocks-google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'templeton_blocks_enqueue_fonts' );

// Enqueue theme styles
function templeton_blocks_enqueue_styles() {
    wp_enqueue_style( 
        'templeton-blocks-style', 
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'templeton_blocks_enqueue_styles' );
