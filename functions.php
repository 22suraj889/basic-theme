<?php
function basic_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'basic-style', get_stylesheet_uri() );

    // Enqueue custom script
    wp_enqueue_script( 'basic-script', get_template_directory_uri() . '/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'basic_theme_enqueue_scripts' );
