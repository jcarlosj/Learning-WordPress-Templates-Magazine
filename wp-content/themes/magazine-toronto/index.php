<?php get_header(); ?>
    <div id="primary" class="primary">
        <?php while( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile;  ?>
    </div>
<?php echo get_sidebar(); ?>
<?php get_footer(); ?>
