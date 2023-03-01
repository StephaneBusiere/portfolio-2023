<?php
/**
 * Content section block template.
 *
 * @package Blocks/ContentSection/Templates
 */


$background_class = empty( $block['backgroundColor'] ) ? '' : ' has-' . $block['backgroundColor'] . '-background-color';
$background_color = get_field( 'content-section-background-color' );
?>
<section <?php ign_block_attrs( $block, 'section-content-block full-width' . $background_class ); ?>>
	<div class="container-content" 
	<?php
	if ( $background_color ) :
		?>
		style=background:<?php echo esc_attr( $background_color ); endif ?>>
		<InnerBlocks />
	</div>

</section>
