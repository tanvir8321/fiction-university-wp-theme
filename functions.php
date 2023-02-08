<?php

function fiction_theme_files()
{
    wp_enqueue_script('custome-google-fonts', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custome-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('fiction_theme_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('fiction_theme_extra_styles', get_theme_file_uri('/build/index.css'));
}

function fiction_theme_features()
{
    register_nav_menu("headerManuLocation", "Header manu location");
    register_nav_menu("footerManuLocationOne", "Footer manu location One");
    register_nav_menu("footerManuLocationTwo", "Footer manu location Two");
    add_theme_support('title-tag');
}
add_action('wp_enqueue_scripts', 'fiction_theme_files');
add_action('after_setup_theme', 'fiction_theme_features');