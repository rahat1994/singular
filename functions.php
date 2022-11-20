<?php

define("THEME_DIRECTORY_URI", get_template_directory_uri());

// hooks
add_action( 'wp_enqueue_scripts', 'singular_register_styles');
add_action( 'wp_enqueue_scripts', 'singular_register_scripts');
add_action( 'after_setup_theme', 'singular_theme_support');



// theme supports
function singular_theme_support(){
    add_theme_support( 'title-tag');
}


function singular_register_styles():void{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style( 'singular_bootstrap', THEME_DIRECTORY_URI.'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'singular_main_style', THEME_DIRECTORY_URI.'/style.css', array('singular_bootstrap'), $version, 'all' );
    wp_enqueue_style( 'singular_responsive', THEME_DIRECTORY_URI.'/assets/css/responsive.css', array(), $version, 'all' );
    wp_enqueue_style( 'singular_animation', THEME_DIRECTORY_URI.'/assets/css/loaders.css', array(), $version, 'all' );
    wp_enqueue_style( 'singular_animation', THEME_DIRECTORY_URI.'/assets/css/animation.css', array(), $version, 'all' );
}
function singular_register_scripts():void{

    $version = wp_get_theme()->get('Version');
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
    wp_enqueue_script( 'singular_jquery', THEME_DIRECTORY_URI.'/assets/js/jquery.min.js', array(), '1.0.0', true  );
    wp_enqueue_script( 'singular_bootstrap', THEME_DIRECTORY_URI.'/assets/js/bootstrap.min.js', array('singular_jquery'), $version , true);
    wp_enqueue_script( 'singular_html_five_min', THEME_DIRECTORY_URI.'/assets/js/html5.min.js', array(), $version , true);
    wp_enqueue_script( 'singular_placeholders', THEME_DIRECTORY_URI.'/assets/js/placeholders.min.js', array(), $version , true );
    wp_enqueue_script( 'singular_respond', THEME_DIRECTORY_URI.'/assets/js/respond.min.js', array(), $version , true);
    wp_enqueue_script( 'singular_plugins', THEME_DIRECTORY_URI.'/assets/js/plugins.js', array('singular_jquery'), $version  , true);
    wp_enqueue_script( 'singular_scripts', THEME_DIRECTORY_URI.'/assets/js/scripts.js', array('singular_jquery'), $version, true);
}



