<?php

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloChild
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKZ938B&gtm_auth=9eXmjTsztYoM0aS2ex-oWg&gtm_preview=env-1&gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php
    hello_elementor_body_open();

    if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {
        get_template_part('template-parts/header');
    }
