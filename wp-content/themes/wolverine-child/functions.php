<?php
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles', 1000 );
function child_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
}

add_action( 'after_setup_theme', 'g5plus_child_theme_setup');
function g5plus_child_theme_setup(){
    $language_path = get_stylesheet_directory() .'/languages';
    if(is_dir($language_path)){
        load_child_theme_textdomain('g5plus-wolverine', $language_path );
    }
}
// if you want to add some custom function

/* Wolverine Child Theme Template Loader */



?>