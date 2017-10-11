<?php get_header(); ?>
    <div id="primary" class="primary">
        <h1 class="category-title"><?php _e( 'Categoría: ' ); single_cat_title(); ?></h1>
        <?php while( have_posts() ) : the_post(); ?>
            <h2 class="tips"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <div class="clearfix"></div>
        <?php endwhile;  ?>
    </div>
<?php echo get_sidebar(); ?>
<?php get_footer(); ?>
