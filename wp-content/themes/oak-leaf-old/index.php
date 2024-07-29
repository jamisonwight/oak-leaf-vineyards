<?php get_header(); ?>
<section id="content">
  <article class="section">
    <div class="wrapper">
      <div class="left_column">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	       <a href="<?php the_permalink() ?>"><h2>TITLE</h2></a>
          <div class="post_content">
          <h6><a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
            </a></h6>
          <p class="italic date">DATE
            <?php the_time('l, F d, Y'); ?>
          </p>
          <?php the_excerpt(); ?>
          <p class="read_more"><a href="<?php the_permalink() ?>">Read More</a></p>
          </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <h2>Not Found</h2>
        <?php endif; ?>
      </div>
      <div class="right_column">
        <?php get_sidebar(); ?>
      </div>
      <div id="blog_nav_index"> <span class="blog_left_nav">
       <?php previous_posts_link('<img src="' . get_bloginfo(template_url) . '/img/button-previous.png" alt="Previous" />') ?>
        </span><span class="blog_right_nav">
        <?php next_posts_link('<img src="' . get_bloginfo(template_url) . '/img/button-next.png" alt="Previous" />') ?>
        </span> </div>
    </div>
  </article>
</section>
<?php get_footer(); ?>