<?php

function archive_filters() {
	$category = $_POST['category'];

	$paged        = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
	$realisations = new WP_Query(
		array(
			'post_type'     => 'realisations-dixeed',
			'order_by'      => 'date',
			'order'         => 'desc',
			'paged'         => $paged,
			'category_name' => $category,
		)
	);

	if ( $realisations->have_posts() ) :
		?>
				<?php
				while ( $realisations->have_posts() ) :
					$realisations->the_post();
					$categories = get_the_category();
					?>
			<div class="realisations-container">
					<div class="realisations-text-left">
						<h4 class="realisations-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="realisations-category-container">
						<?php
						foreach ( $categories as $category ) {
							?>
								<div class="realisations-category"><?php echo esc_html( $category->name ); ?></div>
						<?php } ?>
						</div>
					</div>
					<div class="realisations-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'sizes' => '(width:220px) , (height:146px) ' ) ); ?></a></div>

				</div>
									<?php wp_reset_postdata(); ?>
									<?php
							endwhile;
					endif;
					wp_die()
	?>
					<?php
}

				add_action( 'wp_ajax_nopriv_archive_filters', 'archive_filters' );
				add_action( 'wp_ajax_archive_filters', 'archive_filters' );

function filter_all() {
	$paged                = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$realisations = new WP_Query(
				array(

					'post_type' => 'realisations-dixeed',
					'order_by'  => 'date',
					'order'     => 'desc',
					'paged'     => $paged,
				)
			);

	if ( $realisations->have_posts() ) :
		?>
				<?php
				while ( $realisations->have_posts() ) :
					$realisations->the_post();
					$categories = get_the_category();
					?>
			<div class="realisations-container">
					<div class="realisations-text-left">
						<h4 class="realisations-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="realisations-category-container">
						<?php
						foreach ( $categories as $category ) {
							?>
								<div class="realisations-category"><?php echo esc_html( $category->name ); ?></div>
						<?php } ?>
						</div>
					</div>
					<div class="realisations-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'sizes' => '(width:220px) , (height:146px) ' ) ); ?></a></div>

				</div>
					<?php wp_reset_postdata(); ?>
					<?php
			endwhile;
	endif;
	wp_die()
	?>
	<?php
}



				add_action( 'wp_ajax_nopriv_filter_all', 'filter_all' );
				add_action( 'wp_ajax_filter_all', 'filter_all' );
