<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}

// priority of 99 ensures that the style.css is added after the blogster css, thus enables the child theme to overwrite the styles of the theme. 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', '99' );
?>