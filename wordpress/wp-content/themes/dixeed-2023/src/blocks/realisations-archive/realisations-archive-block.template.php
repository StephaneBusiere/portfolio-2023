<?php
/**
 * Content block realisations-archive.
 *
 * @package Blocks/realisations-archive/Templates
 */
$background_color = get_field( 'background_color_realisations_archive' );

?>

<section  <?php ign_block_attrs( $block, 'realisation-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>">

			<?php
			$taxonomies = array( 'category' );
			$terms      = get_terms( $taxonomies, $args );
			$args       = array(
				'type'       => 'realisations-dixeed',
				'hide_empty' => false,
				'parent'     => 0,
				'exclude'    => 1,
			);
			?>
			  
			<div class="filter-container">
			<img class="icon-realisations" src="<?php echo get_template_directory_uri(); ?>/images/icons-trie.svg" alt="">
				<div class="filter-item all" data-category="all"><?php echo __( 'Toutes les réalisations', 'Dixeed-2023' ); ?></div>
				<?php
				if ( ! empty( $terms ) ) :
					foreach ( $terms as $terms ) :
						$cat_id = $terms->term_id;

						if ( $cat_id == 1 ) {
							continue;
						}
						?>
				<div class="filter-item" data-category="<?php echo $terms->slug; ?>"><?php echo $terms->slug; ?></div>
						<?php
				endforeach;
						endif;
				?>

			</div>
			<?php
			$paged        = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			$realisations = new WP_Query(
				array(
					'post_type' => 'realisations-dixeed',
					'order_by'  => 'date',
					'order'     => 'desc',
					'paged'     => $paged,
				)
			);
			?>
			<div class="loader-container"></div>
			<div class="realisations-wrapper">
				<?php if ( $realisations->have_posts() ) : ?>
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
				?>
			</div>
				<section class="pager m-50">
								<div class="row">
									<div class="pagination-container">
									<?php
									$big = 999999999;

									echo paginate_links(
										array(
											'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
											'format'    => '?paged=%#%',
											'current'   => max( 1, get_query_var( 'paged' ) . '/' ),
											'total'     => $realisations->max_num_pages,
											'prev_next' => true,
											'prev_text' => '<span class="btn-gold pull-left">← Précédent</span>',
											'next_text' => '<span class="btn-gold pull-right">Suivant →</span>',
										)
									);


									?>
									</div>
								</div>
			</section>
</section>
