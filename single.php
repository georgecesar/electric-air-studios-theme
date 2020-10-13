<div class="container single">
  <?php get_header(); ?>
  <main>
    <?php
    if (have_posts()) :
      while (have_posts()) : ?>
        <article>
          <?php $thumbnail = get_the_post_thumbnail_url(); ?>
          <!-- Featured image -->
          <div class="featured-image" style="background-image: url(<?php echo $thumbnail; ?>);"></div>
          <div class="title-date">
            <h1 class="title"><?php echo the_title(); ?></h1>
            <?php if (in_category("Electric Air Live")) {
              echo "<div class='date'>" . get_the_date() . "</div>";
            } ?>
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
