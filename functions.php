<?php
function avss_enqueue_scripts()
{
    //Enqueuing Stylesheet
    wp_enqueue_style('wp-style', get_stylesheet_uri(), NULL, '1.0.1', 'all');
    wp_enqueue_style('avss-ionicons', 'https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css', NULL, '1.0.1', 'all');
    wp_enqueue_style('avss-bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', NULL, '1.0.1', 'all');
    wp_enqueue_style('avss-fonts', get_template_directory_uri() . '/assets/fonts/avss-fonts.css', NULL, '1.0.1', 'all');
    wp_enqueue_style('avss-style', get_template_directory_uri() . '/assets/css/avss.css', array('avss-fonts', 'avss-bootstrap'), '1.0.1', 'all');


    //Enqueuing Scripts
    wp_enqueue_script('avss-popperjs', get_template_directory_uri() . '/assets/vendors/bootstrap/popper/popper.min.js', NULL, '1.0.1', true);
    wp_enqueue_script('avss-bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.min.js', NULL, '1.0.1', true);
    wp_enqueue_script('avss-smoothjs', get_template_directory_uri() . '/assets/vendors/smooth-scroll/smooth-scroll.polyfills.min.js', NULL, '1.0.1', true);
    wp_enqueue_script('avss-js', get_template_directory_uri() . '/assets/js/avss.js', array('jquery', 'avss-bootstrap'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'avss_enqueue_scripts');


function avss_theme_features()
{
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'avss_theme_features');