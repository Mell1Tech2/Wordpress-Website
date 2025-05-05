<?php
/**
 * The template header
 * 
 * This is the template that displays all of the <head> section and everything up until <main id="main" class="entry-site-main">
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Mell1Tech2
 * 
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>

    <!-- Required meta tags -->
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- jQuery Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="masthead" class="site-header">

      <?php if ( !function_exists( 'the_custom_logo' ) || !has_custom_logo() ) : ?>
        <h1 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
      <?php endif; ?><!-- .site-title -->

      <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
        <div class="site-branding">
          <?php the_custom_logo(); ?>
        </div>
      <?php endif; ?><!-- .site-branding -->

      <?php if ( has_nav_menu( 'mell1tech2_theme-primary-menu' ) ) : ?>
        <nav id="site-navigation" class="main-navigation">
          <?php
            wp_nav_menu([
              'theme_location'  => 'mell1tech2_theme-primary-menu', 
              'container'       => '',
              'menu_class'      => 'really-first-menu'
            ]);
          ?>
          <a href="#" class="close-nav-mobile">
            &times; <?php esc_html_e( 'Close Menu', 'mell1tech2_theme' ); ?>
          </a><!-- .close-nav-mobile -->
        </nav>
      <?php endif; ?><!-- #site-navigation -->

      <a href="#site-navigation" class="open-nav-mobile">
        <?php esc_html_e( 'Open Menu', 'mell1tech2_theme' ); ?>
      </a><!-- .open-nav-mobile -->
   
    </header><!-- #masthead -->

    <div id="primary" class="content-area">
      <main id="main" class="entry-site-main">
    