<?php
/**
 * Content block horizontal-slider.
 *
 * @package Blocks/horizontal-slider/Templates
 */

$horizontal_slide = get_field( 'horizontal_slide' );
?>
<div <?php ign_block_attrs( $block, 'horizontal-slider-block full-width' ); ?>>
	<div class="horizontal-slider-wrapper">
		<?php
		if ( have_rows( 'horizontal_slide' ) ) :
			?>
				<ul class="horizontal-slider">
				<?php
				while ( have_rows( 'horizontal_slide' ) ) :
					the_row();
					$slide_title   = get_sub_field( 'slide_title' );
					$slide_content = get_sub_field( 'slide_content' );
					$slide_graphic = get_sub_field( 'slide_graphic' );
					?>
							<li class="horizontal-slide">
								<h3 class="h2"><?php echo $slide_title; ?></h3>
								<div class="graphics">
									<img src="<?php echo $slide_graphic; ?>" alt="<?php echo __( 'Agence dixeed', 'dixeed-2023' ); ?>">
								</div>
								<div class="slide-content">
								<?php echo $slide_content; ?>
								</div>
							</li>
							<?php
					endwhile;
				?>
				</ul>
				<div class="nav">
					<div class="cta-arrow cta-arrow-prev">
						<a href="#" title="<?php printf( __( 'Slide précédent', 'dixeed-2023' ) ); ?>">
							<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M13 0.333352L15.2562 2.55002L6.38954 11.4167L25.6666 11.4167L25.6666 14.5834L6.38954 14.5834L15.2562 23.45L13 25.6667L0.333293 13L13 0.333352Z"></path></svg>
						</a>
					</div>
					<div class="cta-arrow  cta-arrow-next">
						<a href="#" title="<?php printf( __( 'Slide suivant', 'dixeed-2023' ) ); ?>">
							<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M13 0.333352L15.2562 2.55002L6.38954 11.4167L25.6666 11.4167L25.6666 14.5834L6.38954 14.5834L15.2562 23.45L13 25.6667L0.333293 13L13 0.333352Z"></path></svg>
						</a>
					</div>
				</div>
				<?php
			else :
				// Do something...
			endif;
			?>
	</div>
</div>
