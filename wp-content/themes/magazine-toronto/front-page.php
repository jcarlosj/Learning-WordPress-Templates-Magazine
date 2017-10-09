<?php get_header(); ?>
    <div id="que-visitar">
        <?php dynamic_sidebar( 'front-page' ); ?>
    </div>
    <div class="clearfix"></div>
    <div id="info-and-tips">
        <div class="information">
            <?php
                $informacion = new WP_Query( 'page_id=9' ); # Hacemos un llamado al Id de la página de información
                while( $informacion -> have_posts() ) : $informacion -> the_post();
            ?>
                <h2 class="tips"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="last-tips">
            <h2 class="tips">Consejos para viajar a Canadá</h2>
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
                <div class="tip">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'imagen-guia-toronto' ); ?>
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
<?php get_footer(); ?>
