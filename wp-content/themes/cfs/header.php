<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cornerstone_Furnished_Solutions
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap core css -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
<!-- Fancybox core css -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/jquery.fancybox.css">
<!-- FontAwesome icons -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Play" rel="stylesheet">



<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cfs' ); ?></a>

<!-- HEADER -->
  <header class="site-header" role="banner">
    <!-- NAV -->
    <nav class="navbar navbar-default">
      <div id="social-nav-top">
        <div id="nav-top-icons">
          <ul>
            <li><a href="https://twitter.com/CFS_Worldwide"><i class="fa fa-fw fa-twitter-square"></i></a></li>
            <li><a href="https://www.facebook.com/CornerstoneFurnishedSolutions"><i class="fa fa-fw fa-facebook-square"></i></a></li>
            <li><a href="https://plus.google.com/+Cornerstonefurnishedsolutions"><i class="fa fa-fw fa-google-plus-square"></i></a></li>
            <li><a href="https://www.linkedin.com/company/cornerstone-furnished-solutions"><i class="fa fa-fw fa-linkedin-square"></i></a></li>
          </ul>
        </div></a>
        <div id="nav-top-number">
          <a href="tel:+1-813-263-7705">813.263.7705</a><span class="fa fa-fw fa-phone"></span>
        </div>
      </div>

      <div class="navbar-header">
        <a href="/">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cornerstone1.png" alt="CornerstoneFurnishedSolutions Logo"  class="logo" width="200" height="100">
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

    <?php
    	wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'container_class'   => 'collapse navbar-collapse navbar-right',
					'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker()
          )
      );
    ?>
  </header>


