<?php
  /*
    Add theme functions here
  */

  function debug($val) {
    echo "<pre>";
    print_r($val);
    echo "</pre>";
  }

  function html5reset_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
      return $title;

    $title .= get_bloginfo( 'name' );

    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
      $title = "$title $sep $site_description";

    if ( $paged >= 2 || $page >= 2 )
      $title = "$title $sep " . sprintf( __( 'Page %s', 'cbb_setup' ), max( $paged, $page ) );

    return $title;
  }
  add_filter( 'wp_title', 'html5reset_wp_title', 10, 2 );

  remove_action('wp_head', 'wp_generator');

  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');

  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('admin_print_styles', 'print_emoji_styles');

  add_filter('show_admin_bar', '__return_false');

  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');

  function my_deregister_scripts(){
    wp_deregister_script('wp-embed');
  }
  add_action('wp_footer', 'my_deregister_scripts');
