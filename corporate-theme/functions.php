<?php
function corporate_theme_scripts() {
    wp_enqueue_style( 'corporate-style', get_theme_file_uri( 'style.css' ) );
    wp_enqueue_script( 'corporate-js', get_theme_file_uri( 'script.js' ), array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'corporate_theme_scripts' );

register_block_pattern_category( 'corporate', array( 'label' => 'Corporate' ) );

require_once get_theme_file_path( 'patterns.php' );
?>
