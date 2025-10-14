<?php
/**
 * Theme setup for Paris Creative Agency.
 */
function pca_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'gallery', 'caption', 'style', 'script' ] );
    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'paris-creative-agency' ),
    ] );
}
add_action( 'after_setup_theme', 'pca_theme_setup' );

/**
 * Enqueue theme assets.
 */
function pca_enqueue_assets() {
    wp_enqueue_style( 'pca-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@400;600;700&display=swap', [], null );
    wp_enqueue_style( 'pca-style', get_stylesheet_uri(), [ 'pca-google-fonts' ], wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'pca_enqueue_assets' );

/**
 * Register custom image sizes.
 */
function pca_register_image_sizes() {
    add_image_size( 'pca-service', 480, 320, true );
    add_image_size( 'pca-portfolio', 720, 480, true );
}
add_action( 'after_setup_theme', 'pca_register_image_sizes' );

/**
 * Filter the excerpt length to keep it concise for cards.
 */
function pca_excerpt_length( $length ) {
    if ( is_admin() ) {
        return $length;
    }

    return 18;
}
add_filter( 'excerpt_length', 'pca_excerpt_length', 99 );
