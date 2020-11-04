<div class="container page">
  <?php if ($post->post_parent == 61) get_header("streaming");
  else get_header(); ?>
  <main>
    <?php
    if (have_posts()) :
      while (have_posts()) : ?>
        <article>
          <?php
          the_post();
          the_content();
          ?>
        </article>
    <?php
      endwhile;
    endif; ?>
  </main>
  <?php get_footer(); ?>
</div>
