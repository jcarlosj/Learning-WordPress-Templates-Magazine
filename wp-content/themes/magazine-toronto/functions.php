<?php
    /* Hook: Normalize */
    function magazine_scripts() {
        wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.css' );    # Normalize
        wp_enqueue_style( 'style-theme', get_stylesheet_uri() );                                # Hoja de estilos principal
    }
    add_action( 'wp_enqueue_scripts', magazine_scripts );
?>
