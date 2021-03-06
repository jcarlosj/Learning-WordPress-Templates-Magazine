<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <title>
            <?php wp_title( '' ); ?>
            <?php if( wp_title( '', false ) ) : echo ' : '; endif; ?>
            <?php bloginfo( 'name' ); ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="page">
            <header id="masthead" class="site-header" role="banner">
                <div class="container">
                    <!-- Website Logo -->
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' )?>" />
                        </a>
                    </div>
                    <!-- Website Main Menu -->
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </header>
            <div id="container" class="container">
