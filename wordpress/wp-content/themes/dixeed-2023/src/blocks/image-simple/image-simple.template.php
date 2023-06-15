<?php
/**
 * Content text-image block template.
 *
 * @package Blocks/text-image/Templates
 */

?>
<?php
$image            = get_field( 'image_simple' );
$image_mobile     = get_field( 'image_simple_mobile' );
$background_color = get_field( 'background_color_image' );

?>

<section <?php ign_block_attrs( $block, 'image-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>" data-scroll-section>

	<div class="text-image-container <?php echo esc_attr( $text_position [0] ); ?> <?php echo esc_attr( $text_spacing [0] ); ?>">
		<div class="image-simple-container">
			<img class="image" src="<?php echo esc_url( $image ); ?>" alt="">
		</div>
</section>
