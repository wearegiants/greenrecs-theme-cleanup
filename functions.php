<?php

require_once locate_template('/lib/default.php');
require_once locate_template('/lib/themewrangler.class.php');
require_once locate_template('/lib/slug.php' );
require_once locate_template('/lib/cleanassnav.php' );
//include_once locate_template('/lib/custom-post-types.php' );
include_once locate_template('/lib/woo-disablebilling.php' );
include_once locate_template('/lib/videoembed.php' );
include_once locate_template('/lib/woo-ajax.php' );
include_once locate_template('/lib/advanced-custom-fields-pro/acf.php' );
include_once locate_template('/lib/soil-master/soil.php' );
include_once locate_template('/lib/roots-rewrites-master/roots-rewrites.php' );
include_once locate_template('/lib/opengraph/opengraph.php' );
include_once locate_template('/lib/config.php' );

add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
  $path = get_stylesheet_directory() . '/lib/advanced-custom-fields-pro/';
  return $path;
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
 $dir = get_stylesheet_directory_uri() . '/lib/advanced-custom-fields-pro/';
 return $dir;
}

add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-clean-up');
add_theme_support( 'woocommerce' );

add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

function jk_dequeue_styles( $enqueue_styles ) {
  unset( $enqueue_styles['woocommerce-general'] );  // Remove the gloss
  unset( $enqueue_styles['woocommerce-layout'] );   // Remove the layout
  unset( $enqueue_styles['woocommerce-smallscreen'] );  // Remove the smallscreen optimisation
  return $enqueue_styles;
}

add_filter( 'woocommerce_enqueue_styles', '__return_false' );

$settings = array(

  'available_scripts' => array(
    'jquery-g'          => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
    'scripts'           => array('/assets/js/scripts.min.js'),
    'jqueryui'          => array('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js'),
    'videojs'           => array('//vjs.zencdn.net/4.3/video.js'),
    ),

  'default_scripts'   => array(
    'jqueryui',
    'videojs',
    'scripts',
    ),

  'available_stylesheets' => array(
    'default'           => array('/assets/css/styles.min.css'),
    ),

  'default_stylesheets' => array(
    'default'
    ),

  'deregister_scripts' => array('jquery','l10n')
  );

if(function_exists("acf_add_options_page")) {
  acf_add_options_page();
}

if(function_exists("register_options_page")) {
  //register_options_page('Site Options');
}

Themewrangler::set_defaults( $settings );

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
