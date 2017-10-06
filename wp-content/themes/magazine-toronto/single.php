<?php get_header(); ?>

    <?php while( have_posts() ) : the_post(); ?>

        <?php if( has_post_thumbnail() ) : ?>
            <div id="imagen-destacada">
                <?php the_post_thumbnail( 'imagen-destacada' ); ?>
                <h2><?php the_title(); ?></h2>
            </div>
        <?php else: ?>
            <h2 id="no-imagen-destacada">
                <?php the_title(); ?>
            </h2>
        <?php endif; ?>

        <div id="primary" class="primary">
            <?php edit_post_link( 'Editar entrada', '<p>', '</p>');                      # edit_post_link(); sin personalización. Enlace para la edición de la entrada desde el Front-End hacia el Back-End ?>
            <?php the_tags( __( 'Etiquetas del post: ' ), ' | ', '<br />' );  # the_tags(); sin personalización ?>
            <?php _e( 'Categorizado en: ' ); the_category( ' | ', '<br />' ); # the_category(); sin personalización ?>
            <br />
            <?php _e( 'Entrada escrita por: ' ); the_author(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
            </article>
        </div>
    <?php endwhile;  ?>
<?php echo get_sidebar(); ?>
<?php get_footer(); ?>
