<?php
function corporate_theme_setup() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
    register_block_pattern_category( 'corporate', array( 'label' => __( 'Corporate', 'corporate-theme' ) ) );
}
add_action( 'after_setup_theme', 'corporate_theme_setup' );

function corporate_theme_scripts() {
    wp_enqueue_style( 'corporate-style', get_theme_file_uri( 'style.css' ) );
    wp_enqueue_script( 'corporate-js', get_theme_file_uri( 'script.js' ), array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'corporate_theme_scripts' );

require_once get_theme_file_path( 'patterns.php' );
