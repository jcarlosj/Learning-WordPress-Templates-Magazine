<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <title></title>
    </head>
    <body <?php body_class(); ?>>
        <div class="page">
            <header id="masthead" class="site-header" role="banner">
                <div class="container">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' )?>" />
                        </a>
                    </h1>
                </div>
            </header>
            <div id="container" class="container">
