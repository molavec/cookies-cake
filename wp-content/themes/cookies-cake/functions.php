<?php

/**
 * ADD STYLES
 * 
 */

function cookies_cake_scripts_styles() {
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0' );
};
add_action('wp_enqueue_scripts', 'cookies_cake_scripts_styles');

// ADD MENUS
function cookies_cake_menus() {
  register_nav_menus( array(
    'menu-principal' => __('Menu Principal', 'cookies_cake'),
  ));
}
add_action('init', 'cookies_cake_menus');

