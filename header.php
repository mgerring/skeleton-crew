<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php
  	/*
  	 * Print the <title> tag based on what is being viewed.
  	 */
  	global $page, $paged;

  	wp_title( '|', true, 'right' );

  	// Add the blog name.
  	bloginfo( 'name' );

  	// Add the blog description for the home/front page.
  	$site_description = get_bloginfo( 'description', 'display' );
  	if ( $site_description && ( is_home() || is_front_page() ) )
  		echo " | $site_description";

  	// Add a page number if necessary:
  	if ( $paged >= 2 || $page >= 2 )
  		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

  	?></title>
  <link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon.ico" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicon/icon144x144.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon/icon114x114.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon/icon72x72.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicon/icon57x57.png" />

  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php if (defined('WP_DEBUG') && WP_DEBUG): ?>
  <link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/css/style.less">
  <?php else: ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
  <?php endif; ?>
  <!-- end CSS-->
  <?php 
      wp_enqueue_script('modernizr', get_bloginfo('template_url').'/js/libs/modernizr-2.0.6.min.js');
      if (defined('WP_DEBUG') && WP_DEBUG)
          wp_enqueue_script('less-css', get_bloginfo('template_url').'/js/vendor/less-1.3.0.min.js')
  ?>
  <?php wp_head(); ?>
</head>

<body>

  <div id="container">
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <?php wp_nav_menu(array('theme_location'=>'header','container'=>'nav', 'menu_class' => 'menu-container', 'menu_id' => 'nav-top', 'fallback_cb'=>false)); ?>
    </header>