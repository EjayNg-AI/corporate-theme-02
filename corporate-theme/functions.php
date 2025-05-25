<?php
function corporate_theme_enqueue(){
    wp_enqueue_style('corporate-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_script('corporate-script', get_template_directory_uri().'/assets/js/scripts.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'corporate_theme_enqueue');
