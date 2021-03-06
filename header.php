<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage webstarterkitthirteen
 * @since webstarterkitthirteen 0.4.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="196x196" href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch/chrome-touch-icon-196x196.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- twenty thirteen -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>

  </head>
<body <?php body_class(); ?>>
    <header class="app-bar promote-layer">
      <div class="app-bar-container">
        <button class="menu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hamburger.svg" alt="Menu"></button>
        <h1 class="logo"><?php bloginfo( 'name' ); ?></h1>
        <section class="app-bar-actions">
        <!-- Put App Bar Buttons Here -->
        </section>
      </div>
    </header>

    <?php if( get_header_image() != '' ) : ?>
    <div id="headerimage">
        <img src="<?php header_image(); ?>"   alt="<?php bloginfo( 'name' ); ?>"/>
    </div>
    <?php endif; // header image was removed ?>

    <nav class="navdrawer-container promote-layer">
      <h4>Navigation</h4>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </nav>

    <main>