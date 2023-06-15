<?php
$background_color = get_field( 'vertical-title-background-color' );
$underline_text   = get_field( 'vertical-title-underline-text' );
$description_text = get_field( 'vertical-title-description-text' );
$vertical_text = get_field( 'vertical-title' );
?>

<section <?php ign_block_attrs( $block, 'text-vertical-title-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>"data-scroll-section>

	<div class="text-vertical-title-container">
		<div class="top-text-container" >
			<?php echo wp_kses_post( $underline_text ); ?>
		</div>
		<div class="bottom-text-container" >
			<?php echo wp_kses_post( $description_text ); ?>
		</div>
		<div class="vertical-title-container" >
			<?php echo wp_kses_post( $vertical_text ); ?>
		</div>
	</div>
</section>
