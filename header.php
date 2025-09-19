<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header role="banner">
  <nav class="primary-nav">
    <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'fallback_cb'=>'__return_false']); ?>
  </nav>
</header>
