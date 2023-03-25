<?php

function cookies_cake_menus() {
  register_nav_menus( array(
    'menu-principal' => __('Menu Principal', 'cookies_cake'),
  ));
}

add_action('init', 'cookies_cake_menus');