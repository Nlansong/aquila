<?php
/**
 * Theme Functions
 * @package aquila
 */

 function aquila_enqueue_scripts(){
   //styles
    wp_register_style('style-css', get_stylesheet_uri(),[], filemtime(get_template_directory().'/style.css'), 'all');
    wp_register_style('boostrap-css', get_template_directory().'/assets/src/libraries/css/boostrap.min.css',[], false, 'all');

    //scripts
    wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true);
    wp_register_script('boostrap-js', get_template_directory_uri().'/assets/src/libraries/js/boostrap.min.js', ['jquery'], false, true);


    //enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('boostrap-css');

    //enqueue scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('boostrap-js');
 }
 add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
?>