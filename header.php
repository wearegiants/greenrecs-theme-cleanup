<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="http://fast.fonts.net/jsapi/9821687b-b5e8-4bbf-89bc-1a07c39cca82.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class('fs-grid'); ?>>
  <div class="wrapper">

    <header id="head" class="main-nav <?php if(get_field('white_background')){ echo 'light'; } ?> <?php if( get_field('simple_header') || is_page_template( 'page-booker.php' )):?>simple<?php endif;?>">
      <div class="fs-row">
        <?php
          $menuParameters = array(
            'container'       => false,
            'echo'            => false,
            'items_wrap'      => '%3$s',
            'theme_location'  => 'main-menu',
            'walker'          => new MV_Cleaner_Walker_Nav_Menu(),
            'depth'           => 0,
          );
        ?>
        <nav id="logo-wrap" class="fs-cell fs-lg-3 fs-md-2 fs-sm-3"><a href="/" class="<?php if( get_field('simple_header') || is_page_template( 'page-booker.php' )):?>simple<?php endif;?>"><?php bloginfo( 'name' ) ?></a></nav>
        <nav id="primary-nav" class="fs-cell fs-lg-9 fs-md-4 fs-sm-hide text-right"><?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?></nav>
      </div>
    </header>