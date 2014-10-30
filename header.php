<!DOCTYPE html>

<!--[if lt IE 7 ]>
<html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
                                                    <!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="blogcatalog" content="9BC8605692"/>
  <meta name="verify-v1" content="BsQKLgAw/fzA6uLdhKxsSvKVZfYG0Kc+c3l8V/uN5Os="/>
  <meta name="google-site-verification" content="AzTi6Y-g77avS5DHp8F4_AzUnz6fI1MVjPLyly2pv1U"/>

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php if ( is_search() ) { ?>
    <meta name="robots" content="noindex, nofollow"/>
  <?php } ?>

  <title>
    <?php
    if ( function_exists( 'is_tag' ) && is_tag() ) {
      single_tag_title( "Tag Archive for &quot;" );
      echo '&quot; - ';
    }
    elseif ( is_archive() ) {
      wp_title( '' );
      echo ' Archive - ';
    }
    elseif ( is_search() ) {
      echo 'Search for &quot;' . wp_specialchars( $s ) . '&quot; - ';
    }
    elseif ( !( is_404() ) && ( is_single() ) || ( is_page() ) ) {
      wp_title( '' );
      echo ' - ';
    }
    elseif ( is_404() ) {
      echo 'Not Found - ';
    }
    if ( is_home() ) {
      bloginfo( 'name' );
      echo ' - ';
      bloginfo( 'description' );
    }
    else {
      bloginfo( 'name' );
    }
    if ( $paged > 1 ) {
      echo ' - page ' . $paged;
    }
    ?>
  </title>

  <meta name="title" content="<?php
  if ( function_exists( 'is_tag' ) && is_tag() ) {
    single_tag_title( "Tag Archive for &quot;" );
    echo '&quot; - ';
  }
  elseif ( is_archive() ) {
    wp_title( '' );
    echo ' Archive - ';
  }
  elseif ( is_search() ) {
    echo 'Search for &quot;' . wp_specialchars( $s ) . '&quot; - ';
  }
  elseif ( !( is_404() ) && ( is_single() ) || ( is_page() ) ) {
    wp_title( '' );
    echo ' - ';
  }
  elseif ( is_404() ) {
    echo 'Not Found - ';
  }
  if ( is_home() ) {
    bloginfo( 'name' );
    echo ' - ';
    bloginfo( 'description' );
  }
  else {
    bloginfo( 'name' );
  }
  if ( $paged > 1 ) {
    echo ' - page ' . $paged;
  }
  ?>">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">

  <meta name="google-site-verification" content="">
  <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->

  <meta name="author" content="Giovambattista Fazioli">
  <meta name="Copyright" content="Copyright Undolog 2011. All Rights Reserved.">

  <!-- Dublin Core Metadata : http://dublincore.org/ -->
  <meta name="DC.title" content="Undolog.com">
  <meta name="DC.subject" content="Research & Development Blog">
  <meta name="DC.creator" content="Giovambattista Fazioli">

  <?php if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'iPad' ) || strpos( $_SERVER['HTTP_USER_AGENT'], 'iPhone' )
  ) : // iPhone/iPad ?>
    <meta name="viewport" content="width=1024"/>
  <?php endif; ?>

  <!--  Mobile Viewport meta tag
  j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
  device-width : Occupy full width of the screen in its current orientation
  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
  <!-- Uncomment to use; use thoughtfully!
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  -->

  <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/_/img/favicon.ico">
  <!-- This is the traditional favicon.
     - size: 16x16 or 32x32
     - transparency is OK
     - see wikipedia for info on browser support: http://mky.be/favicon/ -->

  <link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/_/img/apple-touch-icon.png">
  <!-- The is the icon for iOS's Web Clip.
     - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
     - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
     - Transparency is not recommended (iOS will put a black BG behind the icon) -->

  <!-- CSS: screen, mobile & print are all in the same file -->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>?e">

  <!-- all our JS is at the bottom of the page, except for Modernizr. -->
  <script src="<?php bloginfo( 'template_directory' ); ?>/_/js/modernizr-1.7.min.js"></script>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

  <?php if ( is_singular() ) {
    wp_enqueue_script( 'comment-reply' );
  } ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page-wrap" class="clearfix"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

  <header id="header">
    <div class="internationalBox">
      <?php if ( function_exists( "gltr_build_flags_bar" ) ) gltr_build_flags_bar() ?>
    </div>
    <h1><a href="<?php echo get_option( 'home' ); ?>/"><?php bloginfo( 'name' ); ?></a></h1>

    <div class="description"><?php bloginfo( 'description' ); ?></div>
    <div id="search-form">
      <?php include_once( TEMPLATEPATH . '/searchform.php' ); ?>
    </div>
    <nav id="access" role="navigation">
      <h3 class="assistive-text"><?php _e( 'Main menu', 'undolog_theme' ); ?></h3>
      <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff.
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'undolog_theme' ); ?>"><?php _e( 'Skip to primary content', 'undolog_theme' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'undolog_theme' ); ?>"><?php _e( 'Skip to secondary content', 'undolog_theme' ); ?></a></div>
					*/
      ?>
      <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    <!-- #access -->
  </header>