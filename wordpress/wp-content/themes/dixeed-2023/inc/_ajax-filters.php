<?php

function archive_filters() {
	$category = $_POST['category'];

	$paged      = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
	$news       = new WP_Query(
		array(
			'post_type'     => 'realisations-dixeed',
			'order_by'      => 'date',
			'order'         => 'desc',
			'paged'         => $paged,
			'category_name' => $category,
		)
	);

			if ( $news->have_posts() ) :
				?>
				<?php
				while ( $news->have_posts() ) :
					$news->the_post();
					?>
	<div class="realisations-wrapper">
		<div class="News-container">
			<div class="News-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date( 'd F Y' ); ?></a></div>
			<div class="News-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'sizes' => '(width:220px) , (height:146px) ' ) ); ?></a></div>
			<div class="News-text-left">
				<div class="News-tag"><?php the_tags( $before = '' ); ?></div>
				<h4 class="News-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<div class="News-resum"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
			</div>
			<div class="news-arrow-link"><a href="<?php the_permalink(); ?>">&#8594;</a></div>


		</div>
					<?php wp_reset_postdata(); ?>
					<?php
			endwhile;
			endif;
			wp_die()
			?>
	</div>
	<?php
}

add_action( 'wp_ajax_nopriv_archive_filters', 'archive_filters' );
add_action( 'wp_ajax_archive_filters', 'archive_filters' );

function filter_all() {
	$paged      = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$news = new WP_Query(
				array(

					'post_type' => 'realisations-dixeed',
					'order_by'  => 'date',
					'order'     => 'desc',
					'paged'     => $paged,
				)
			);

	if ( $news->have_posts() ) :
		?>
				<?php
				while ( $news->have_posts() ) :
					$news->the_post();
					?>
		<div class="realisations-wrapper">
			<div class="News-container">
				<div class="News-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date( 'd F Y' ); ?></a></div>
				<div class="News-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'sizes' => '(width:220px) , (height:146px) ' ) ); ?></a></div>
				<div class="News-text-left">
					<div class="News-tag"><?php the_tags( $before = '' ); ?></div>
					<h4 class="News-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="News-resum"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
				</div>
				<div class="news-arrow-link"><a href="<?php the_permalink(); ?>">&#8594;</a></div>


			</div>
					<?php wp_reset_postdata(); ?>
					<?php
			endwhile;
					endif;
					wp_die()
	?>
		</div>
	<?php
}



  add_action( 'wp_ajax_nopriv_filter_all', 'filter_all' );
  add_action( 'wp_ajax_filter_all', 'filter_all' );
