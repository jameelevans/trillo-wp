<?php

//Adction to enque styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

//Action to activate the ability to add custom logo in customizer
add_action( 'after_setup_theme', 'trillo_custom_logo_setup' );

//Enqueuing styles and scripts
function theme_enqueue_scripts() {
  wp_enqueue_script( 'Vendor_js', get_template_directory_uri() . '/scripts/Vendor.js#asyncload', array(), '1.0.0', false );
  wp_enqueue_script( 'App_js', get_template_directory_uri() . '/scripts/App.js#asyncload', array(), '1.0.0', true );
  wp_enqueue_style('trillo_main_styles', get_stylesheet_uri());
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  	wp_enqueue_script( 'comment-reply' );
  }
}

//Activate theme support options, custom images and menus
function trillo_custom_logo_setup() {
  $defaults = array(
      'height'      => 38,
      'width'       => 38,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'Trillo', 'A tillo clone' ),
  );
  add_theme_support( 'custom-logo', $defaults );
}
