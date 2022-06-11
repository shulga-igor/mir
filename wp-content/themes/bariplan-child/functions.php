<?php

add_action( 'wp_enqueue_scripts', 'bariplan_enqueue_styles' );
function bariplan_enqueue_styles() {
    wp_enqueue_style( 'bariplan-parent-style', get_template_directory_uri() . '/style.css' );
    //wp_enqueue_style( 'bariplan-parent-custom-styles', get_template_directory_uri() . '/assets/css/style.css' );
}