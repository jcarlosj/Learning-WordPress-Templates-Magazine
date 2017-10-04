<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php // Individual Post Styling ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
	<?php endwhile; ?>

	<?php // Navigation ?>
<?php else : ?>
	<?php // No Posts Found ?>
<?php endif; ?>
