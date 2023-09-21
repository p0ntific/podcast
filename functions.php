<?php

add_action('wp_enqueue_scripts', 'get_style');
add_action('after_setup_theme', 'register_menus');
add_action('wp_enqueue_scripts', 'get_scripts');
function get_style()
{
  wp_enqueue_style('styling', get_stylesheet_uri());
}
function get_scripts()
{
  wp_enqueue_script('jquery', get_template_directory_uri() . '/jquery.min.js');
  wp_enqueue_script('scripts', get_template_directory_uri() . '/main.js');
}
function register_menus()
{
  register_nav_menus(array(
    'top' => 'Верхнее меню',    //Название месторасположения меню в шаблоне
    'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
  ));
}
