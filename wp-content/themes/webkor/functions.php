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

function webkorCustomHeaderSetup() {
    $args = [
        'default-image'    => get_template_directory_uri() . '/assets/images/bg.jpg',
        'width' => '612',
        'flex-width' => true,
        'height' => '408',
        'flex-height' => true,
    ];

    add_theme_support( 'custom-header', $args );

    $headerImages = [
        'jakasNazwa' => [
            'url' => get_template_directory_uri() . '/assets/images/bg2.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/bg2.jpg',
            'description'   => 'Jakiś przykładowy opis'
        ]
    ];

    register_default_headers( $headerImages );
}

function webkorCustomLogoSetup() {
    $args = [
        'height' => 260,
        'width' => 260,
        'flex-width'    => false,
        'flex-height'    => true,
        'unlink-homepage-logo' => true
    ];

    add_theme_support('custom-logo', $args);
}

function webkorPostFormatsSetup() {
    $postFormats = ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'];

    add_theme_support( 'post-formats', $postFormats );
}

function webkorCustomPostFormatsSetup() {
    add_post_type_support( 'page', 'post-formats' );
    add_post_type_support( 'post', 'post-formats' );
}

add_action( 'after_setup_theme', 'webkorCustomHeaderSetup' );
add_action( 'after_setup_theme', 'webkorCustomLogoSetup' );
add_action( 'after_setup_theme', 'webkorPostFormatsSetup' );
add_action( 'init', 'webkorCustomPostFormatsSetup' );
