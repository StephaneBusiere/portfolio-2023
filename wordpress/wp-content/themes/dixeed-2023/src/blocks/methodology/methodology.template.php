<?php
/**
 * Content text-image block template.
 *
 * @package Blocks/text-image/Templates
 */

?>
<?php

$background_color = get_field( 'background_color_methodology' );
$text             = get_field( 'methodology-text' );
$text             = get_field( 'methodology-text' );

?>

<section <?php ign_block_attrs( $block, 'methodology-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>">

	<div class="methodology-container">
		<div class="text-container"><?php echo wp_kses_post( $text ); ?>
		</div>
		<?php
		if ( have_rows( 'methodology-accordion' ) ) :
			?>
		<div class="methodology-accordeon-container">
			<?php
			while ( have_rows( 'methodology-accordion' ) ) :
				the_row();
				$accordion_title = get_sub_field( 'metodology-accordion-title' );
				$accordion_content = get_sub_field( 'metodology-accordion-content' );
				?>
				<div class="methodology-accordeon-item">
					<div class="methodology-accordeon-title"><?php echo wp_kses_post( $accordion_title ); ?></div>
					<div class="methodology-accordeon-content"><?php echo wp_kses_post( $accordion_content ); ?></div>
				</div>
		<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
