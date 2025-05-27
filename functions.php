<?php
function finom_etterem_setup() {
    // Add support for title tag
    add_theme_support( 'title-tag' );

    // Register navigation menu
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'finom-etterem' ),
    ) );

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'finom_etterem_setup' );

function finom_etterem_enqueue_styles() {
    // Enqueue the theme's stylesheet
    wp_enqueue_style( 'finom-etterem-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'finom_etterem_enqueue_styles' );
?>