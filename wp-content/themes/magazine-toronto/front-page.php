<?php get_header(); ?>
    <div id="que-visitar">
        <?php dynamic_sidebar( 'front-page' ); ?>
    </div>
    <div class="informacion-consejos">
        <div class="informacion">
            <?php
                $informacion = new WP_Query( 'page_id=9' ); # Hacemos un llamado al Id de la página de información
                while( $informacion -> have_posts() ) : $informacion -> the_post();
            ?>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="consejos">
            <h2>Consejos para viajar a Canadá</h2>
            <?php
                $args = array(
                    'cat'            => 8,      # ID de la categoría que se desea desplegar
                    'posts_per_page' => 2,      # Cantidad de post por páginas
                    'orderby'        => 'date', # Ordenados por fecha
                    'order'          => 'DESC'  # Orden desendente
                );

                $consejos = new WP_Query( $args );
                while( $consejos -> have_posts() ) : $consejos -> the_post();
            ?>
                <?php the_post_thumbnail( 'imagen-guia-toronto' ); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
<?php get_footer(); ?>
