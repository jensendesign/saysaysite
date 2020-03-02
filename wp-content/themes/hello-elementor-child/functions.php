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
// require_once('lib/tracking.php');


/**
 * Sidebar for Hello Theme
 * 
 * @link https://docs.elementor.com/article/583-hello-theme
 * 
 * @link https://codex.wordpress.org/Widgetizing_Themes
 * more ideads on custom widgets
 */

if (function_exists("register_sidebar")) {
   register_sidebar();
 }

/**
 * Remove admin bar items
 * 
 * @link https://themeisle.com/blog/why-and-how-to-customize-the-wordpress-toolbar/
 * 
 * @link https://gist.github.com/nschaeferhoff/5757bd60a27ceb226610a5883867d574
 * more ideads on custom widgets
 */

 function remove_toolbar_items($wp_adminbar) {
   $wp_adminbar->remove_node('comments');
   $wp_adminbar->remove_node('wp-logo');
   $wp_adminbar->remove_node('new-content');
   $wp_adminbar->remove_node('delete-cache');
   $wp_adminbar->remove_node('stats');
 }
 
 add_action('admin_bar_menu', 'remove_toolbar_items', 999);
