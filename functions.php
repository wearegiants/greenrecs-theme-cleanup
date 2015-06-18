<?php

require_once ('lib/default.php');
require_once ('lib/themewrangler.class.php');
require_once ('lib/slug.php');
require_once ('lib/cleanassnav.php' );
//include_once ('lib/custom-post-types.php' );
include_once ('lib/woo-disablebilling.php' );
include_once ('lib/videoembed.php' );
include_once ('lib/woo-ajax.php' );
include_once ('lib/advanced-custom-fields-pro/acf.php' );
include_once ('lib/soil-master/soil.php' );
include_once ('lib/roots-rewrites-master/roots-rewrites.php' );
include_once ('lib/opengraph/opengraph.php' );
include_once ('lib/config.php' );

function my_acf_settings_path( $path ) {
  $path = get_stylesheet_directory() . '/lib/advanced-custom-fields-pro/';
  return $path;
}
add_filter('acf/settings/path', 'my_acf_settings_path');


function my_acf_settings_dir( $dir ) {
 $dir = get_stylesheet_directory_uri() . '/lib/advanced-custom-fields-pro/';
 return $dir;
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');

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

  'available_scripts'   => array(
    'jquery-g'          => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
    'vendor'            => array('/assets/js/vendor.min.js', '1.2'),
    'app'               => array('/assets/js/scripts.min.js', '1.1'),
    'jqueryui'          => array('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js', '1.11.3'),
    'bootstrap'         => array('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js', '3.3.4'),
    'bsmodal'           => array('//cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.5/js/bootstrap-modalmanager.min.js', '2.2.5'),
    ),

  'default_scripts'   => array(
    'jqueryui',
    'vendor',
    'app',
    ),

  'available_stylesheets' => array(
    'vendor'          => array('/assets/css/vendor.min.css', 1),
    'theme'           => array('/assets/css/theme.min.css', 1),
    'boostrap'        => array('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css', 1),
    ),

  'remove_from_head' => [],
  'default_stylesheets' => array(
    'vendor',
    'theme',
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
