<?php

function fiction_theme_files()
{
    wp_enqueue_style('fiction_theme_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fiction_theme_files');