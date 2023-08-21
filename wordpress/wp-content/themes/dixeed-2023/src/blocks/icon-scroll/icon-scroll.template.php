<?php
/**
 * Content text-image block template.
 *
 * @package Blocks/text-image/Templates
 */

?>
<?php
$background_color = get_field( 'background_color_scroll_icon' );
?>

<section <?php ign_block_attrs( $block, 'scroll-icon-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>" data-scroll-section>

	<div class="scroll-icon-container">

	<svg class="scroll-icon" xmlns="http://www.w3.org/2000/svg" width="39" height="132" viewBox="0 0 39 132" fill="none">
		<line x1="19.5" y1="132" x2="19.5" y2="2.18557e-08" stroke="#262626"/>
		<path d="M3.04552 16L19.5 44.5L35.9545 16H3.04552Z" stroke="black" stroke-width="0.5"/>
		<circle cx="19.5" cy="25.5" r="9.25" stroke="#262626" stroke-width="0.5"/>
	</svg>

</section>
