<div class="container blog">
  <?php get_header(); ?>
  <?php $q2 = new WP_Query(array("category_name" => "Blog")); ?>
  <main>
    <?php
    if ($q2->have_posts()) :
      while ($q2->have_posts()) : ?>
        <article>
          <?php $q2->the_post(); ?>
          <?php the_title("<h1>", "</h1>"); ?>
          <?php if (has_post_thumbnail()) : ?>
            <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
          <?php endif; ?>
          <span class="date">
            <?php echo get_the_date(); ?>
          </span>
          <?php the_excerpt(); ?>
          <ul class="alt">
            <li>
              <a href="<?php echo the_permalink(); ?>">Read more</a>
            </li>
          </ul>
        </article>
    <?php
      endwhile;
    endif; ?>
  </main>
  <?php get_footer(); ?>
</div>
