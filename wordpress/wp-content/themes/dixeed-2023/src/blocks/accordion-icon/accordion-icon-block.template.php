<?php
/**
 * Content accordion + icon block template.
 *
 * @package Blocks/accordion-icon/Templates
 */
?>
<?php

/**
 * Slider accordion-icon Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$disable_responsive = get_field( 'accordions_disable_responsive' );
$extra_classes      = $disable_responsive === true ? ' disable-responsive-style' : '';
$background_color = get_field( 'background_color_accordeon' );
?>

<section <?php ign_block_attrs( $block, 'accordion-block-wrapper full-width' . $extra_classes ); ?> style="background-image:url(<?php echo esc_url( $background_image ); ?>); background-color:<?php echo ( $background_color ); ?>"data-scroll-section>
	<?php if ( have_rows( 'accordions_block' ) ) : ?>
		<div class="accordion-block container">
			<?php
			while ( have_rows( 'accordions_block' ) ) :
				the_row();
				$accordion_image = get_sub_field( 'accordion-image' );
				$accordion_icon  = get_sub_field( 'accordion-icon' );
				$accordion_title = get_sub_field( 'accordion-title' );
				$accordion_text  = get_sub_field( 'accordion-text' );
				?>
				<div class="accordion-content">
				<?php if ( $accordion_image ) : ?>
					<div class="accordion-image-container">
						<img class="accordion-image" src="<?php echo esc_url( $accordion_image ); ?>" alt="">
					</div>
					<?php endif ?>
					<div class="accordion-text-content-container">
						<div class="accordion-title"><?php echo wp_kses_post( $accordion_title ); ?></div>
						<div class="accordion-button-container">+
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/button-open.svg " alt="" class="accordion-button-open"> -->
						</div>
						<div class="accordion-text-container">
							<div class="accordion-text"><?php echo wp_kses_post( $accordion_text ); ?></div>
						</div>
						<div class="accordion-button-close-container">-
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/button-close.svg " alt="" class="accordion-button-close"> -->
						</div>
					</div>
				</div>
				<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>
