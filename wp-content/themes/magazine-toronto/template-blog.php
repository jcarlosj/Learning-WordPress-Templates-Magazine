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
					'cat'            => array( 5, 4, 3 ),	# Tags ID de las categorías que deseamos mostrar
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
				<div class="toronto-guide-entry">
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'imagen-guia-toronto' ); ?>
						</a>
						<div class="category">
							<?php the_category(); ?>
						</div>
					</div>

					<div class="content">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); # Contenido abreviado ?>
						<a href="<?php the_permalink(); ?>">Leer más</a>
						<div class="clearfix"></div>
					</div>

					<div class="info">
						<p class="author">Por: <span><?php the_author(); ?></span> </p>
						<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
						<div class="clearfix"></div>
					</div>
				</div>
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
