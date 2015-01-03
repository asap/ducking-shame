<?php

if ( ! function_exists( 'ducking_shame_setup' ) ) :

function ducking_shame_setup() {
    // Enable support for Post Thumbnails, and declare two sizes.
    // add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 672, 372, true );
    // add_image_size( 'ducking-shame-full-width', 1038, 1080, true );


}

endif; // ducking_shame_setup
add_action( 'after_setup_theme', 'ducking_shame_setup' );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}