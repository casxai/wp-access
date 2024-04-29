<?php

// load stylesheets


function enqueue_tailwind_css()
{
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . './src/output.css', array(), false, 'all');
    // wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/input.css');
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');

function load_css()
{
    wp_register_style(
        'input',
        get_template_directory_uri() . './src/input.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('input');

}

add_action('wp_enqueue_scripts', 'load_css');

// load javascript
// function load_js()
// {
//     wp_enqueue_script('jquery');
//     wp_register_script(
//         'bootstrap',
//         get_template_directory_uri() . 'styles/js/bootstrap.min.js',
//         'jquery',
//         false,
//         true
//     );
//     wp_enqueue_script('bootstrap');
// }

// add_action('wp_enqueue_scripts', 'load_js');

// theme options
add_theme_support('menus');
add_theme_support('thumbnails');

// menus
register_nav_menus(

    array(
        // top-menu is the ID of the menu, Top Menu is the visual
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);

/**
 * Register Custom Navigation Walker
 */
// function register_navwalker()
// {
//     require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// }
// add_action('after_setup_theme', 'register_navwalker');


