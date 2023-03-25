<?php

/**
 * ADD STYLES
 * 
 */

function cookiescake_scripts_styles() {
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0' );
};
add_action('wp_enqueue_scripts', 'cookiescake_scripts_styles');

/**
 * ADD MENUS
 * 
 */
function cookiescake_menus() {
  register_nav_menus( array(
    'menu-principal' => __('Menu Principal', 'cookiescake'),
  ));
}
add_action('init', 'cookiescake_menus');

