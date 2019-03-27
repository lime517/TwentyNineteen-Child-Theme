<?php

/* functions.php */

function enqueue_core_files() {
    // Parent CSS
    wp_enqueue_style('sl-parent-styles', get_template_directory_uri() . '/style.css');

    // Child files
    $maincss_cache_buster = date("YmdHis", filemtime( get_stylesheet_uri() . '/main.css'));
    $scriptjs_cache_buster = date("YmdHis", filemtime( get_stylesheet_uri() . '/script.js'));
    wp_enqueue_style( 'sl-main', get_stylesheet_uri() . '/main.css', array(), $maincss_cache_buster, 'all' );
    wp_enqueue_script( 'sl-script', get_stylesheet_uri() . '/script.js', array('jquery'), $scriptjs_cache_buster );
}
add_action( 'wp_enqueue_scripts', 'enqueue_core_files' );


?>
