<div class="container">
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
  <?php get_footer(); ?>
</div>
