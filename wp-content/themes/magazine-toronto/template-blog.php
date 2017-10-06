<?php
/*
 * Template Name: Guía Toronto
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
					'cat'            => array( 6, 5, 4 ),	# Tags ID de las categorías que deseamos mostrar
					'posts_per_page' => 6,                  # Número de post a publicar
			        'orderby'        => 'date',             # Ordenar por fecha
			        'order'          => 'DESC'              # Tipo de ordenamiento
				);
				/* WP_Query */
				$guiaToronto = new WP_Query( $args );
				/* Validación para impresión de los post solicitados en los argumentos de búsqueda */
				while( $guiaToronto -> have_posts() ) :
			        $guiaToronto -> the_post();
			?>
				<pre><?php var_dump( $guiaToronto ); ?></pre> 
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
