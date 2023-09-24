<?php

function veterinary_load_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('all-styles', get_theme_file_uri('/styles/all-styles.css'), array(), '1.0', 'all');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'veterinary_load_scripts');

function veterinary_config()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}

add_action('after_setup_theme', 'veterinary_config', 0);

// Deixa o tema compativel com versões anteriores ao 5.2
if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
