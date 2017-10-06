<?php
/*
 * Template Name: Consejos
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php // Individual Post Styling ?>
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
	        <?php
			/* Argumentos de busqueda */
			$args = array(
				'cat'            => 8,	                # Tags ID de las categorías que deseamos mostrar
				'posts_per_page' => 5,                  # Número de post a publicar
				'orderby'        => 'date',             # Ordenar por fecha
				'order'          => 'DESC'              # Tipo de ordenamiento
			);
			/* WP_Query */
			$consejos = new WP_Query( $args );
			/* Validación para impresión de los post solicitados en los argumentos de búsqueda */
			while( $consejos -> have_posts() ) :
				$consejos -> the_post();
			?>
				<?php the_post_thumbnail( 'imagen-consejos' ); ?>
				<h2 class="tips"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	<?php endwhile; ?>

	<?php // Navigation ?>
<?php else : ?>
	<?php // No Posts Found ?>
	<div id="primary" class="primary"></div>
<?php endif; ?>

<?php echo get_sidebar(); ?>
<?php get_footer(); ?>
