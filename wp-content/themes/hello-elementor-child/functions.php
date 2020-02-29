<?php
/**
 * hello child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HelloChild 
 */

//  Enqueue parent styles
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_parent_styles' );

function hello_child_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Include additional php files
require_once('lib/tracking.php');
