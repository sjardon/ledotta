<?php

define('TEMPLATE_URI',get_template_directory_uri());
define('TEMPLATE_CSS_URI',TEMPLATE_URI.'/css');
define('TEMPLATE_BUNDLE_URI',TEMPLATE_URI.'/dist');

$theme = wp_get_theme();

function load_styles(){
    
    // wp_enqueue_style('ledotta-css',TEMPLATE_BUNDLE_URI.'/bundle.css');
    wp_enqueue_style('ledotta-css',TEMPLATE_BUNDLE_URI.'/bundle.css');
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
    // wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=EB+Garamond&family=Quicksand&display=swap');
    // <link rel="preconnect" href="https://fonts.gstatic.com">
    

    
}

function load_scripts(){
    wp_enqueue_script('ledotta-js', TEMPLATE_BUNDLE_URI.'/bundle.js',array(),'',true);
}


add_action('wp_enqueue_scripts', 'load_styles');
add_action('wp_enqueue_scripts', 'load_scripts');
