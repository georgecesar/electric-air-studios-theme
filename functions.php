<?php
function initialize()
{
  function enqueue_styles()
  {
    wp_enqueue_style("style", get_stylesheet_uri(), null, filemtime(get_template_directory() . "/style.css"));
    wp_enqueue_style("fonts", get_template_directory_uri() . "/assets/css/fonts.css", null, filemtime(get_template_directory() . "/assets/css/fonts.css"));
    wp_enqueue_style("affogato", get_template_directory_uri() . "/assets/css/Affogato/affogato.css", null, filemtime(get_template_directory() . "/assets/css/Affogato/affogato.css"));
    wp_enqueue_style("header", get_template_directory_uri() . "/assets/css/header.css", null, filemtime(get_template_directory() . "/assets/css/header.css"));
    wp_enqueue_style("mobile-menu", get_template_directory_uri() . "/assets/css/mobile-menu.css", null, filemtime(get_template_directory() . "/assets/css/mobile-menu.css"));
    wp_enqueue_style("services", get_template_directory_uri() . "/assets/css/services.css", null, filemtime(get_template_directory() . "/assets/css/services.css"));
    wp_enqueue_style("streaming", get_template_directory_uri() . "/assets/css/streaming.css", null, filemtime(get_template_directory() . "/assets/css/streaming.css"));
    wp_enqueue_style("collapsible", get_template_directory_uri() . "/assets/css/collapsible.css", null, filemtime(get_template_directory() . "/assets/css/collapsible.css"));
    wp_enqueue_style("studio", get_template_directory_uri() . "/assets/css/studio.css", null, filemtime(get_template_directory() . "/assets/css/studio.css"));
    wp_enqueue_style("footer", get_template_directory_uri() . "/assets/css/footer.css", null, filemtime(get_template_directory() . "/assets/css/footer.css"));
    wp_enqueue_style("home", get_template_directory_uri() . "/assets/css/home.css", null, filemtime(get_template_directory() . "/assets/css/home.css"));
    wp_enqueue_style("single", get_template_directory_uri() . "/assets/css/single.css", null, filemtime(get_template_directory() . "/assets/css/single.css"));
    wp_enqueue_style("blog", get_template_directory_uri() . "/assets/css/blog.css", null, filemtime(get_template_directory() . "/assets/css/blog.css"));
    wp_enqueue_style("newsletter-form", get_template_directory_uri() . "/assets/css/newsletter-form.css", null, filemtime(get_template_directory() . "/assets/css/newsletter-form.css"));
    wp_enqueue_style("contact", get_template_directory_uri() . "/assets/css/contact.css", null, filemtime(get_template_directory() . "/assets/css/contact.css"));
  }

  function enqueue_scripts()
  {
    wp_enqueue_script("fontawesome", "https://kit.fontawesome.com/2149f0becd.js");
    wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js");
    wp_enqueue_script("mobile-menu", get_template_directory_uri() . "/assets/js/mobile-menu.js", array("gsap"));
    wp_enqueue_script("services", get_template_directory_uri() . "/assets/js/services.js", array("gsap"), filemtime(get_template_directory() . "/assets/js/services.js"));
    wp_enqueue_script("collapsible", get_template_directory_uri() . "/assets/js/collapsible.js", array("gsap"), filemtime(get_template_directory() . "/assets/js/collapsible.js"));
  }

  register_nav_menus(array(
    "header-menu" => __("Header Menu"),
    "header-streaming-menu" => __("Header Streaming Menu"),
    "footer-menu" => __("Footer Menu"),
    "side-menu" => __("Side Menu"),
    "side-streaming-menu" => __("Side Streaming Menu"),
  ));

  add_theme_support("post-thumbnails");
  add_theme_support("editor-styles");
  add_theme_support("dark-editor-style");
  add_editor_style("editor-style.css");

  add_action("wp_enqueue_scripts", "enqueue_scripts");
  add_action("wp_enqueue_scripts", "enqueue_styles");

  add_filter('get_image_tag_class', '__return_empty_string');
}

add_action("init", "initialize");
