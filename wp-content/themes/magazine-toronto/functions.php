<?php
    /* Hook: Normalize */
    function magazine_scripts() {
        wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.css' );    # Normalize
        wp_enqueue_style( 'style-theme', get_stylesheet_uri() );                                # Hoja de estilos principal
    }
    add_action( 'wp_enqueue_scripts', 'magazine_scripts' );

    /* Creamos una navegación nueva */
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'Magazine' )
    ) );

    /* Implementa la función de imagen destacada al contenido de las páginas 'page.php' */
    add_theme_support( 'post-thumbnails' );

    /* Define NUEVOS tamaños predeterminados para las imágenes */
    add_image_size( 'imagen-destacada', 1100, 418, true );     # Páginas
    add_image_size( 'imagen-guia-toronto', 350, 210, true );   # Entradas (Post)

    /* Creamos Widgets */
    function magazine_widgets() {
        register_sidebar( array(
            'name'          => __( 'SideBar Testimonios' ),              # Nombre del "Widget"
            'id'            => 'sidebar-2',                              # Nombre que vamos a usar en el THEME para hacer uso de este "Widget"
            'description'   => 'Widgets de testimonios',                 # Descripción del "Widget"
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',  # Imprime antes del "Widget"
            'after_widget'  => '</aside>',                               # Imprime después del "Widget"
            'before-title'  => '<h3 class="widget-title">',              # Imprime antes del título del Widget
            'after-title'   => '</h3>',                                  # Imprime después del título del Widget
        ) );
    }
    add_action( 'widgets_init', 'magazine_widgets' );
    # NOTA : %1$s y %2$s agrega nombres de ID y CLASS predeterminados de WordPress

    /* Ocultar la barra de administración en el FrontEnd cuando se está loguedo */
    add_filter( 'show_admin_bar', '__return_false' );

?>
