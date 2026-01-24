<?php
/**
 * Templeton Blocks functions and definitions
 */

// Enqueue Adobe Fonts
function templeton_blocks_enqueue_fonts() {
    // Enqueue Adobe Fonts (Typekit)
    wp_enqueue_style(
        'templeton-blocks-adobe-fonts',
        'https://use.typekit.net/lby7ohq.css',
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

// Add iframe loading spinner script
function templeton_blocks_iframe_spinner() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const iframes = document.querySelectorAll('iframe');

        iframes.forEach(function(iframe) {
            // Create spinner element
            const spinner = document.createElement('div');
            spinner.className = 'iframe-spinner';

            // Create container if iframe doesn't have one
            if (!iframe.parentElement.classList.contains('iframe-container')) {
                const container = document.createElement('div');
                container.className = 'iframe-container';
                iframe.parentNode.insertBefore(container, iframe);
                container.appendChild(iframe);
                container.appendChild(spinner);
            } else {
                iframe.parentElement.appendChild(spinner);
            }

            // Hide spinner when iframe loads
            iframe.addEventListener('load', function() {
                spinner.classList.add('hidden');
            });
        });
    });
    </script>
    <?php
}
add_action( 'wp_footer', 'templeton_blocks_iframe_spinner' );

// Current year shortcode
function templeton_blocks_current_year() {
    return date('Y');
}
add_shortcode( 'year', 'templeton_blocks_current_year' );
