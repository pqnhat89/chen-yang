<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pqnhat89_widgets_init()
{
    register_sidebar(array(
        'name' => __('Home 1', 'pqnhat89'),
        'id' => 'home-1',
        'description' => __('Add widgets here to appear in your home 1.', 'pqnhat89'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Home 2', 'pqnhat89'),
        'id' => 'home-2',
        'description' => __('Add widgets here to appear in your home 2.', 'pqnhat89'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Home 3', 'pqnhat89'),
        'id' => 'home-3',
        'description' => __('Add widgets here to appear in your home 3.', 'pqnhat89'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Home 4', 'pqnhat89'),
        'id' => 'home-4',
        'description' => __('Add widgets here to appear in your home 4.', 'pqnhat89'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer', 'pqnhat89'),
        'id' => 'footer',
        'description' => __('Add widgets here to appear in your footer.', 'pqnhat89'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'pqnhat89_widgets_init');

function register_menu()
{
    register_nav_menu('primary-menu', __('Primary Menu'));
}

add_action('init', 'register_menu');

/**
 * Enqueue scripts and styles.
 */
function pqnhat89_scripts()
{
    wp_enqueue_style('uikit', get_template_directory_uri() . '/assets/css/uikit.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('jquery-3.3.1', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js');
    wp_enqueue_script('uikit', get_template_directory_uri() . '/assets/js/uikit.min.js');
    wp_enqueue_script('uikit-icons', get_template_directory_uri() . '/assets/js/uikit-icons.min.js');
    wp_enqueue_script('autoscroll', get_template_directory_uri() . '/assets/js/autoscroll.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'pqnhat89_scripts');

add_theme_support('post-thumbnails');
include_once(get_template_directory() . '/inc/gallery-images.php');