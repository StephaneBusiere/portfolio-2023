<?php
/**
 * Content block cta.
 *
 * @package Blocks/cta/Templates
 */

$cta_link         = get_field( 'cta_link' );
$cta_align        = get_field( 'cta_align' );
$background_color = get_field( 'background_color_cta' );
?>
<div <?php ign_block_attrs( $block, 'cta-block full-width' ); ?>  style="background-color:<?php echo esc_attr( $background_color ); ?>">
	<div class="cta <?php echo $cta_align; ?>">
		<a href="<?php echo esc_url( $cta_link['url'] ); ?>" title="<?php echo esc_attr( $cta_link['title'] ); ?>">
			<span class="shape"></span>
			<span class="text"><?php echo esc_attr( $cta_link['title'] ); ?></span>
		</a>
	</div>
</div>
