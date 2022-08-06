<?php

function load_css() {
    wp_enqueue_style('style_css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_css');