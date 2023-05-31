<?php
define('NORDISKGULD_VERSION', '1.0.0');
require_once 'functions/chart.php';

function Nordisk_enqueue_scripts()
{
  // Global css
  wp_enqueue_style(
    'aireno-theme-style', get_template_directory_uri() . '/style.css',
    array(),
    NORDISKGULD_VERSION,
    'all'
  );

  // Main theme js
  wp_enqueue_script('nordisk-js', get_template_directory_uri() . '/assets/js/nordisk.js', array(), NORDISKGULD_VERSION, true);

  // Add custom scripts
  if (is_front_page()) {
    wp_enqueue_script('frontpage-js', get_template_directory_uri() . '/assets/js/frontpage.js', array(), NORDISKGULD_VERSION, true);
  }
}

add_action('wp_enqueue_scripts', 'Nordisk_enqueue_scripts');

function get_icon_uri($icon)
{
  return get_theme_file_uri("assets/images/icons/") . $icon . ".svg";
}