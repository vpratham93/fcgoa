<?php

if( ! function_exists('pratham')) :

function pratham(){
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

endif;

add_action('after_setup_theme' , 'pratham');

function register_pratham_menus(){
    register_nav_menus(
        array(
        'primary' => __('Primary Menu'),
            'top-menu' => __('Top Menu'),
            'footer' => __('Footer Menu'),
            'footer_primary' => ('Footer Primary ')
        )
        );
}


add_action('init', 'register_pratham_menus');




add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() { 
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;



function pratham_scripts(){
    
    wp_enqueue_style('style', get_stylesheet_uri());
}
    
    add_action('wp_enqueue_scripts', 'pratham_scripts');

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style1', get_template_directory_uri() . '/style2.css' );
}


add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_style( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js' );
	

}


 add_filter("the_content", "plugin_myContentFilter");

  function plugin_myContentFilter($content)
  {
    // Take the existing content and return a subset of it
    return substr($content, 0, 300);
  }



add_action( 'wp_enqueue_scripts', 'theme_js');

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');




?>