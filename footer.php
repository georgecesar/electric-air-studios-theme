<div class="footer-wrapper">
  <footer id='footer'>
    <nav>
      <div class="navigation">
        <h3>Menu</h3>
        <?php wp_nav_menu('nav-menu'); ?>
      </div>
    </nav>
    <?php get_template_part("template-parts/newsletter-form"); ?>
    <span class="copyright"><?php echo date("Y"); ?> &copy; Electric Air Studios</span>
  </footer>
</div>
<?php wp_footer(); ?>
