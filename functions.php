<?php
function my_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'Slovakia-Theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script( 'main-customizer', get_template_directory_uri() . '/js/customizer.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main-webflow', get_template_directory_uri() . '/js/webflow.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main-analytics', 'https://www.googletagmanager.com/gtag/js?id=G-1Y6P8Q3QHF', array(), null, true );
}

function mytheme_enqueue_styles() {
    // wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('mytheme-norm', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('mytheme-web', get_template_directory_uri() . '/css/webflow.css');
    wp_enqueue_style('mytheme-wt', get_template_directory_uri() . '/css/wtyle.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

add_action('wp_enqueue_scripts', 'my_theme_scripts');
?>