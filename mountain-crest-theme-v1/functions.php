<?php
function mountaincrest_enqueue_assets() {
    wp_enqueue_style( 'mountaincrest-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'mountaincrest_enqueue_assets' );

function mountaincrest_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'mountaincrest' ),
    ) );
}
add_action( 'after_setup_theme', 'mountaincrest_theme_setup' );

// Remove Gutenberg Editor
add_filter( 'use_block_editor_for_post', '__return_false', 10 );

// Remove TinyMCE Editor
add_filter( 'user_can_richedit', '__return_false', 50 );

// Remove Auto <p> tag
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
?>