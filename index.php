<?php get_header(); ?>
<main id="site-content">
  <h1><?php bloginfo('name'); ?></h1>
  <p>Hello! <strong>Kenneth Theme 42</strong> is running. 🎉</p>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p><?php _e('No content yet.', 'kenneth-theme42'); ?></p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
