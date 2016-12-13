<?php

function anew_script_enqueue(){
  wp_enqueue_style('customestyle',get_template_directory_uri() . '/css/anewtheme.css',array(), '1.0.0','all');
  wp_enqueue_script('customjs',get_template_directory_uri() . '/js/anewtheme.js',array(),'1.0.0', true);
}

add_action('wp_enqueue_scripts','anew_script_enqueue');

function anew_theme_setup(){

add_theme_support('menus');

register_nav_menu('primary','Primary Header Navigation');

}

add_action('init','anew_theme_setup');
