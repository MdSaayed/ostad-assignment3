<?php

function add_theme_scripts() {

    wp_enqueue_style( 'foodhut-css', get_template_directory_uri() . '/assets/css/foodhut.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/vendors/animate.css/animate.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );


    wp_enqueue_script( 'foodhut-main', get_template_directory_uri() . '/assets/js/foodhut.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-affix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js.map', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-bundle-min', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-bundle-min-js', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.min.js.map', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.js.map', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.min.js.map', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jquery-3-4-1', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jquery-3-4-1-2', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jquery-3-4-1-min', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.min', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jquery-3-4-1-slim', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.slim.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jquery-3-4-1-slim-min', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.slim.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'jquery-3-4-1-slim-min-map', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.slim.min.map', array( 'jquery' ), '1.0', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );