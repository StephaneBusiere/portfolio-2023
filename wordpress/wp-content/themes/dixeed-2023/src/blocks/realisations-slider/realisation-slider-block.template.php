<?php
/**
 * Content block realisation-slider.
 *
 * @package Blocks/realisation-slider/Templates
 */
$background_color  = get_field( 'background_color_realisations_slide' );
$realisation_slide = get_field( 'realisation_slide' );
$cta_link          = get_field( 'cta_link_realisations' );
$realisation_title = get_field( 'realisations_title' );
?>
<section <?php ign_block_attrs( $block, 'realisation-slider-block full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>"data-scroll-section>
	<div class="realisations-container">
		<img class="line-realisations-1"src="<?php echo get_template_directory_uri(); ?>/images/line-realisation-slider-top.svg " alt="">
		<div class="realisation-title-container-mobile">
				<div class="realisation-title"><?php echo esc_attr( $realisation_title ); ?></div>
				<img class="line-realisations-2"src="<?php echo get_template_directory_uri(); ?>/images/line-realisation-slider-bottom.svg " >
			</div>
			<div class="cta-container-mobile">
				<span class="cta-line"></span>
				<div class="cta-realisations<?php echo $cta_align; ?>">
					<a href="<?php echo esc_url( $cta_link['url'] ); ?>" title="<?php echo esc_attr( $cta_link['title'] ); ?>">
						<span class="shape"></span>
						<span class="text"><?php echo esc_attr( $cta_link['title'] ); ?></span>
					</a>
				</div>
			</div>
			<div class="realisation-slider-wrapper">
				<?php
				if ( have_rows( 'realisation_slide' ) ) :
					?>
						<div class="realisation-slider">
						<?php
						while ( have_rows( 'realisation_slide' ) ) :
							the_row();
							$slide_content = get_sub_field( 'realisation_slide_content' );
							?>
							<div class="realisation-slide-content">
								<img src="<?php echo esc_url( $slide_content ); ?>" alt="">
							</div>
									<?php
							endwhile;
						?>
						</div>
						<?php
					endif;
				?>
			</div>
			<div class="cta-container">
				<span class="cta-line"></span>
				<div class="cta-realisations<?php echo $cta_align; ?>">
					<a href="<?php echo esc_url( $cta_link['url'] ); ?>" title="<?php echo esc_attr( $cta_link['title'] ); ?>">
						<span class="shape"></span>
						<span class="text"><?php echo esc_attr( $cta_link['title'] ); ?></span>
					</a>
				</div>
			</div>
			<div class="realisation-title-container">
				<div class="realisation-title"data-splitting data-effect5 data-scroll data-scroll-speed="0"><?php echo esc_attr( $realisation_title ); ?></div>
				<img class="line-realisations-2"src="<?php echo get_template_directory_uri(); ?>/images/line-realisation-slider-bottom.svg " >
			</div>
	</div>
</section>
