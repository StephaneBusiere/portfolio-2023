<?php
/**
 * Content intro 1 block template.
 *
 * @package Blocks/intro-1/Templates
 */

$background_image = get_field( 'background_image_intro_1' );
$background_color = get_field( 'background_color_intro_1' );
$title            = get_field( 'title_intro_1' );
?>

<section <?php ign_block_attrs( $block, 'intro-1-block full-width' ); ?>>
	<div class="intro-1-wrapper"  style="background-image:url(<?php echo esc_url( $background_image ); ?>); background-color:<?php echo ( $background_color ); ?> ">
		<div class="intro-1-title"><?php echo wp_kses_post( $title ); ?></div>
	</div>		
</section>
