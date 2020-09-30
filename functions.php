<?php
/* 
* Theme Functions
*
* @package Aquila
*/

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

function aquila_enqueue_scripts() {
  
  wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
  wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );

  wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );
  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true );

  wp_enqueue_style( 'style-css' );
  wp_enqueue_style( 'bootstrap-css' );
  wp_enqueue_script( 'main-js' );
  wp_enqueue_script( 'bootstrap-js' );
};

add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );