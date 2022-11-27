<?php

    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'script-boot', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . './js/bootstrap.bundle.min.js', array(), '1.0.0', true );

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );

?>