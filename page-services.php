<div class="container services">
  <div class="colors" id="colors">
  </div>
  <?php get_header(); ?>
  <main>
    <article>
      <ul>
        <?php $cat_id = get_cat_ID("services"); ?>
        <?php $q3 = new WP_Query(array("cat" => $cat_id)); ?>
        <?php //$services = get_posts(array("category_name" => "cat-services")); 
        ?>
        <?php
        if ($q3->have_posts()) :
          while ($q3->have_posts()) : ?>
            <li>
              <?php $q3->the_post(); ?>
              <h1>
                <?php echo get_the_title(); ?>
              </h1>
              <?php echo get_the_content(); ?>
            </li>
        <?php
          endwhile;
        endif
        ?>
      </ul>
    </article>
  </main>
  <?php get_footer(); ?>
</div>
