<?php

function wktAddThemeScripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' )) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'wktAddThemeScripts' );