<?php
/**
 * Content block vertical-carousel.
 *
 * @package Blocks/vertical-carousel/Templates
 */
$background_color        = get_field( 'background_color_vertical_carousel' );
$vertical_carousel_col_1 = get_field( 'vertical_carousel_col_1' );
$vertical_carousel_col_2 = get_field( 'vertical_carousel_col_2' );
$vertical_carousel_col_3 = get_field( 'vertical_carousel_col_3' );
?>
<div <?php ign_block_attrs( $block, 'vertical-carousel-block full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>"data-scroll-section>
	<div class="vertical-carousel-wrapper">
		<?php
		if ( have_rows( 'vertical_carousel_col_1' ) ) :
			?>
				<ul class="vertical-carousel">
				<?php
				while ( have_rows( 'vertical_carousel_col_1' ) ) :
					the_row();
					$img  = get_sub_field( 'vertical_carousel_image' );
					$link = get_sub_field( 'vertical_carousel_lien_image' );
					if ( $link === '' ) {
						?>
							<li class="vertical-carousel-item">
								<span style="background-image : url(<?php echo $img; ?>);"></span>
							</li>
							<?php
					} else {
						?>
							<li class="vertical-carousel-item">
								<a href="<?php echo $link; ?>" title="<?php echo __( 'Agence dixeed', 'dixeed-2023' ); ?>" target="_blank">
									<span style="background-image : url(<?php echo $img; ?>);"></span>
								</a>
							</li>
							<?php
					}
					endwhile;
				?>
				</ul>
				<?php
			endif;
		?>
		<?php
		if ( have_rows( 'vertical_carousel_col_2' ) ) :
			?>
				<ul class="vertical-carousel">
				<?php
				while ( have_rows( 'vertical_carousel_col_2' ) ) :
					the_row();
					$img  = get_sub_field( 'vertical_carousel_image' );
					$link = get_sub_field( 'vertical_carousel_lien_image' );
					if ( $link === '' ) {
						?>
							<li>
								<span style="background-image : url(<?php echo $img; ?>);"></span>
							</li>
							<?php
					} else {
						?>
							<li>
								<a href="<?php echo $link; ?>" title="<?php echo __( 'Agence dixeed', 'dixeed-2023' ); ?>" target="_blank">
									<span style="background-image : url(<?php echo $img; ?>);"></span>
								</a>
							</li>
							<?php
					}
					endwhile;
				?>
				</ul>
				<?php
			else :
				// Do something...
			endif;
			?>
		<?php
		if ( have_rows( 'vertical_carousel_col_3' ) ) :
			?>
				<ul class="vertical-carousel">
				<?php
				while ( have_rows( 'vertical_carousel_col_3' ) ) :
					the_row();
					$img  = get_sub_field( 'vertical_carousel_image' );
					$link = get_sub_field( 'vertical_carousel_lien_image' );
					if ( $link === '' ) {
						?>
							<li>
								<span style="background-image : url(<?php echo $img; ?>);"></span>
							</li>
							<?php
					} else {
						?>
							<li>
								<a href="<?php echo $link; ?>" title="<?php echo __( 'Agence dixeed', 'dixeed-2023' ); ?>" target="_blank">
									<span style="background-image : url(<?php echo $img; ?>);"></span>
								</a>
							</li>
							<?php
					}
					endwhile;
				?>
				</ul>
				<?php
			else :
				// Do something...
			endif;
			?>
	</div>
</div>
