<div class="container singular streaming">
  <?php get_header("streaming"); ?>
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
    endif;
    ?>
  </main>
  <?php get_footer(); ?>
</div>
