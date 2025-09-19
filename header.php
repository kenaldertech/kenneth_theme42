<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header" role="banner">
  <div class="container">
    <div class="brand">
      <a class="brand-link" href="<?php echo esc_url( home_url('/') ); ?>">
        <?php
          if ( has_custom_logo() ) {
            the_custom_logo();
          } else {
            // Fallback to site title if no logo yet
            echo '<span class="site-title">'. esc_html( get_bloginfo('name') ) .'</span>';
          }
        ?>
      </a>
    </div>

    <button class="nav-toggle" aria-controls="primary-menu" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <!-- Simple hamburger icon (SVG) -->
      <svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true">
        <path d="M3 6h18M3 12h18M3 18h18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>

    <nav class="primary-nav" aria-label="Primary">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'menu',
          'menu_id'        => 'primary-menu',
          'fallback_cb'    => '__return_false',
          'depth'          => 2,
        ]);
      ?>
    </nav>
  </div>
</header>
