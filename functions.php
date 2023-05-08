<?php

function load_stylesheets(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . 'css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . 'css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('fevicon', get_template_directory_uri() . 'images/fevicon.png', array(), 1, 'all');
    wp_enqueue_style('fevicon');

    wp_register_style('scrollbar', get_template_directory_uri() . 'css/jquery.mCustomScrollbar.min.css', array(), 1, 'all');
    wp_enqueue_style('scrollbar');

    wp_register_style('owl1', get_template_directory_uri() . 'css/owl.carousel.min.css', array(), 1, 'all');
    wp_enqueue_style('owl1');

    wp_register_style('owl2', get_template_directory_uri() . 'css/owl.theme.default.min.css', array(), 1, 'all');
    wp_enqueue_style('owl2');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');


}
?>