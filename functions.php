<?php
// Basic theme supports
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
  register_nav_menus([
    'primary' => __('Primary Menu', 'kenneth-theme42'),
  ]);
});

// Enqueue main CSS (style.css)
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('kenneth-theme', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
});
