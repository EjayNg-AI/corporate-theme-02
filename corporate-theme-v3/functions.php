<?php
/**
 * Corporate Theme V3 functions and definitions
 *
 * @package Corporate_Theme_V3
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function corporate_theme_v3_setup() {
    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for post thumbnails.
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'corporate_theme_v3_setup' );

/**
 * Enqueue scripts and styles.
 */
function corporate_theme_v3_scripts() {
    // Get theme version for cache busting.
    $theme_version = wp_get_theme()->get( 'Version' );

    // Enqueue main stylesheet.
    wp_enqueue_style(
        'corporate-theme-v3-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        $theme_version
    );

    // Enqueue main script.
    wp_enqueue_script(
        'corporate-theme-v3-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        $theme_version,
        true
    );

    // Pass theme directory URI to JavaScript.
    wp_localize_script(
        'corporate-theme-v3-script',
        'corporateTheme',
        array(
            'themeUri' => get_template_directory_uri(),
            'darkMode' => get_option( 'corporate_theme_dark_mode', false ),
        )
    );
}
add_action( 'wp_enqueue_scripts', 'corporate_theme_v3_scripts' );

/**
 * Register block patterns.
 */
function corporate_theme_v3_register_patterns() {
    // Register pattern categories.
    register_block_pattern_category(
        'corporate-theme-v3',
        array(
            'label' => __( 'Corporate Theme V3', 'corporate-theme-v3' ),
        )
    );

    // Get pattern files.
    $patterns = array(
        'hero',
        'section',
        'whatsapp',
    );

    foreach ( $patterns as $pattern ) {
        $pattern_file = get_theme_file_path( '/patterns/' . $pattern . '.php' );
        
        if ( file_exists( $pattern_file ) ) {
            register_block_pattern(
                'corporate-theme-v3/' . $pattern,
                require $pattern_file
            );
        }
    }
}
add_action( 'init', 'corporate_theme_v3_register_patterns' );

/**
 * Filter to add custom body classes.
 */
function corporate_theme_v3_body_classes( $classes ) {
    // Add dark mode class if enabled.
    if ( isset( $_COOKIE['theme'] ) && $_COOKIE['theme'] === 'dark' ) {
        $classes[] = 'dark-mode';
    }

    return $classes;
}
add_filter( 'body_class', 'corporate_theme_v3_body_classes' );



/**
 * Add custom image size for hero images.
 */
function corporate_theme_v3_custom_image_sizes() {
    add_image_size( 'hero-image', 1500, 420, true );
}
add_action( 'after_setup_theme', 'corporate_theme_v3_custom_image_sizes' );