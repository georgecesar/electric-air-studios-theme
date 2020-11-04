<div class="container about">
  <?php get_header(); ?>
  <main>
    <article>
      <?php $cat_id = get_cat_ID("team"); ?>
      <?php $q3 = new WP_Query(array("cat" => $cat_id, "order" => "ASC")); ?>
      <h1><?php the_title(); ?></h1>
      <div class="card-container">
        <?php
        if ($q3->have_posts()) :
          while ($q3->have_posts()) : ?>
            <?php $q3->the_post(); ?>
            <div class="card">
              <div class="card-background" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
              <div class="card-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
              </div>
              <?php the_title('<h2>', '</h2>'); ?>
              <p>
                <a href="<?php the_permalink(); ?>" class="link-chevron">Discover more<i class="fas fa-chevron-right"></i></a>
                </a>
              </p>
              <a class="card-link" href="<?php the_permalink(); ?>"></a>
            </div>
        <?php
          endwhile;
        endif
        ?>
      </div>
    </article>
  </main>
  <?php get_footer(); ?>
</div>
