<?php

// load stylesheets


function enqueue_stylesheets()
{
    //css
    wp_register_style(
        'input',
        get_template_directory_uri() . './src/input.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('input');

    //tailwind
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . './src/output.css', array(), false, 'all');



    //slick
    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script(
        'slick-js',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery'),
        null,
        true
    );

    //slick js
    wp_enqueue_script('custom-script', get_template_directory_uri() . './src/slick.js', array('jquery', 'slick-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_stylesheets');

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


