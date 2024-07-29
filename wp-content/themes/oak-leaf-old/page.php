<?php get_header(); if (have_posts()) : while (have_posts()) : the_post(); ?>

<section id="content">
       <?php the_content(); ?>
</section>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>