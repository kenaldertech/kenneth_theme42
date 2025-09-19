<?php
// Theme supports
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);

  // Custom Logo support (upload via Appearance > Customize > Site Identity)
  add_theme_support('custom-logo', [
    'height'      => 64,
    'width'       => 64,
    'flex-height' => true,
    'flex-width'  => true,
    'unlink-homepage-logo' => true,
  ]);

  // Register primary nav menu
  register_nav_menus([
    'primary' => __('Primary Menu', 'kenneth-theme42'),
  ]);
});

// Enqueue your own CSS/JS (no Bootstrap)
add_action('wp_enqueue_scripts', function () {
  $ver = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'kenneth-theme-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    $ver
  );

  wp_enqueue_script(
    'kenneth-theme-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    $ver,
    true // in footer
  );
});
