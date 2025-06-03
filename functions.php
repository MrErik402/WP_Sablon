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

function finom_etterem_scripts() {
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind', 'https://cdn.tailwindcss.com');
    
    // Enqueue custom styles
    wp_enqueue_style('finom-etterem-style', get_stylesheet_uri());
    
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'finom_etterem_scripts');

// Set up the landing page
function finom_etterem_setup_pages() {
    // Create main page if it doesn't exist
    $main_page = get_page_by_path('main');
    if (!$main_page) {
        $main_page_id = wp_insert_post(array(
            'post_title'    => 'Main Page',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'main'
        ));
    } else {
        $main_page_id = $main_page->ID;
    }
    
    // Force set as front page
    update_option('show_on_front', 'page');
    update_option('page_on_front', $main_page_id);

    // Create blog page if it doesn't exist
    $blog_page = get_page_by_path('blog');
    if (!$blog_page) {
        $blog_page_id = wp_insert_post(array(
            'post_title'    => 'Blog',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'blog'
        ));
    }
    
    update_option('page_for_posts', true);

    // Create about us page if it doesn't exist
    $aboutus_page = get_page_by_path('aboutus');
    if (!$aboutus_page) {
        $aboutus_page_id = wp_insert_post(array(
            'post_title'    => 'Rólunk',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'aboutus'
        ));
    }

    // Mark setup complete
    update_option('finom_etterem_pages_created', true);
}

// Run on theme activation
add_action('after_switch_theme', 'finom_etterem_setup_pages');

// Also run on init to ensure settings are applied
add_action('init', 'finom_etterem_setup_pages');
?>