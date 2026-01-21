<?php
/**
 * Templeton Blocks functions and definitions
 */

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
