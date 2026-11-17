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

// Remove ALL WordPress Inline CSS & Block/Emoji Bloat
function mountaincrest_remove_inline_css() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' );
    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'mountaincrest_remove_inline_css', 100 );

// Remove global styles inline CSS hooks
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );

// Remove inline emoji script & inline emoji CSS
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Remove inline img auto-sizes style tag
add_filter( 'wp_img_tag_add_auto_sizes', '__return_false' );
?>