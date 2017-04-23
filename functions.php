<?php
require_once('lib/clean.php');
require_once('lib/enqueue-style.php');
require_once('lib/foundation.php');
require_once('lib/nav.php');

if( ! function_exists( 'reverie_theme_support' ) ) {
    function reverie_theme_support() {
        load_theme_textdomain('reverie', get_template_directory() . '/lang');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support( 'custom-logo' );
        add_theme_support('menus');
        register_nav_menus(array(
            'primary' => __('Primary Navigation', 'reverie'),
        ));
    }
}
add_action('after_setup_theme', 'reverie_theme_support');

function reverie_widgets_init() {
  register_sidebar(array('name'=> 'Sidebar',
  	'id' => 'sidebar',
      'before_widget' => '<div id="%1$s" class="panel widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
  ));
}
add_action( 'widgets_init', 'reverie_widgets_init' );

if ( ! function_exists( 'reverie_entry_meta' ) ) {
    function reverie_entry_meta() {
        echo '<span class="byline author">'. __('Written by', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .', </a></span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
    }
};
