<div class="container singular streaming">
  <?php get_header(); ?>
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

    <?php $seasons = array('child_of' => get_cat_ID("Electric Air Live")); ?>
    <?php $cats = get_categories($seasons); ?>
    <?php foreach ($cats as $cat) : ?>

      <article>
        <h1><?php echo $cat->name; ?></h1>
        <div class="card-container">
          <?php $q2 = new WP_Query(array("category_name" => $cat->name)); ?>
          <?php
          if ($q2->have_posts()) :
            while ($q2->have_posts()) : ?>
              <div class="card">
                <?php
                $q2->the_post(); ?>
                <div class="card-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                </div>
                <?php the_title('<h2>', '</h2>'); ?>
                <p>
                  <a href="<?php the_permalink(); ?>" class="link-chevron">Watch episode<i class="fas fa-chevron-right"></i></a>
                  </a>
                </p>
              </div>
          <?php
            endwhile;
          endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </article>

    <?php endforeach; ?>

  </main>
  <?php get_footer(); ?>
</div>
