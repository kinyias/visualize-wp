<?php

function blogvisualize_theme_support(){
    //Adds dynamic tittle tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme','blogvisualize_theme_support');

function blogvisualize_register_styles(){
    $version = wp_get_theme() ->get('Version');
    wp_enqueue_style('blogvisualize-style', get_template_directory_uri() . "/style.css", array('blogvisualize-bootstrap'), $version, 'all' );
    wp_enqueue_style('blogvisualize-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all' );
    wp_enqueue_style('blogvisualize-bootstrap-icon', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css", array(), '1.11.1', 'all' );
}

function blogvisualize_register_scripts(){
    $version = wp_get_theme() ->get('Version');
    wp_enqueue_style('blogvisualize-main', get_template_directory_uri() . "/assets/main.js", array(), $version, true );
}

add_action('wp_enqueue_scripts','blogvisualize_register_styles');
add_action('wp_enqueue_scripts','blogvisualize_register_scripts');
?>
