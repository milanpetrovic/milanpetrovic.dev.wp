<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

function mpdev_styles() {
    /*  General style.css file
        File is not enqueued because it only contains the theme configuration.
        CSS is generated inside css/tailwind.prod.css
    */

//    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/css/app.min.css', array(), filemtime(get_template_directory() .'/css/app.min.css'), 'all');
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/css/app.css', array(), filemtime(get_template_directory() .'/css/app.css'), 'all');
    wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap', array(), null );


}

//Load the files, hook them into the enqueue scripts
add_action( 'wp_enqueue_scripts', 'mpdev_styles' );