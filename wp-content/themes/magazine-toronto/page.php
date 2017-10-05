<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php // Individual Post Styling ?>
		<div id="imagen-destacada">
			<?php the_post_thumbnail( 'imagen-destacada' ); ?>
			<h2><?php the_title(); ?></h2>
		</div>

		<div id="primary" class="primary">
	        <?php the_content(); ?>
		</div>
	<?php endwhile; ?>

	<?php // Navigation ?>
<?php else : ?>
	<?php // No Posts Found ?>
	<div id="primary" class="primary"></div>
<?php endif; ?>

<?php echo get_sidebar(); ?>
<?php get_footer(); ?>
