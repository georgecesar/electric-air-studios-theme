<div class="container home">
  <?php get_header(); ?>
  <main>
    <?php
    if (have_posts()) :
      while (have_posts()) : ?>
        <article>
          <?php the_post(); ?>
          <?php the_content(); ?>
      <?php
      endwhile;
    endif; ?>
        </article>
  </main>
</div>
<?php wp_footer(); ?>
