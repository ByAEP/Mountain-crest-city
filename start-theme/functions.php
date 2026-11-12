<?php
function mountaincrest_enqueue_assets() {
    wp_enqueue_style( 'mountaincrest-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_script( 'mountaincrest-scripts', get_template_directory_uri() . '/scripts/scripts.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mountaincrest_enqueue_assets' );

function mountaincrest_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'mountaincrest' ),
    ) );
}
add_action( 'after_setup_theme', 'mountaincrest_theme_setup' );
