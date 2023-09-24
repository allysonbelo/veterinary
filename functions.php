<?php

function veterinary_load_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('all-styles', get_theme_file_uri('/styles/all-styles.css'), array(), '1.0', 'all');

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
}

add_action('wp_enqueue_scripts', 'veterinary_load_scripts');
