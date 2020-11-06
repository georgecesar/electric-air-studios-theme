<div class="container single">
  <?php if (in_category("Electric Air Live")) get_header("streaming");
  else get_header(); ?>
  <main>
    <?php
    if (have_posts()) :
      while (have_posts()) : ?>
        <article>
          <?php $thumbnail = get_the_post_thumbnail_url(); ?>
          <!-- Featured image -->
          <?php if (has_post_thumbnail()) : ?>
            <div class="featured-image" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
          <?php endif; ?>
          <div class="title-date">
            <h1 class="title"><?php echo the_title(); ?></h1>
            <span class="date">
              <?php echo get_the_date(); ?>
            </span>
          </div>
          <?php the_post(); ?>
          <?php the_content(); ?>
        </article>
    <?php
      endwhile;
    endif; ?>
  </main>
  <?php get_footer(); ?>
</div>
