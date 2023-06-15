<?php
/**
 * Content intro 1 block template.
 *
 * @package Blocks/intro-1/Templates
 */

$background_image = get_field( 'background_image_intro_1' );
$background_color = get_field( 'background_color_intro_1' );
$title            = get_field( 'title_intro_1' );
$text_color       = get_field( 'text_color_intro_1' );
?>

<section <?php ign_block_attrs( $block, 'intro-1-block full-width' ); ?> data-scroll-section >
	<div class="intro-1-wrapper"  data-scroll data-scroll-speed="0" style="background-image:url(<?php echo esc_url( $background_image ); ?>); background-color:<?php echo ( $background_color ); ?> ">
		<div class="intro-1-title" data-scroll data-scroll-speed="8" style="color:<?php echo ( $text_color ); ?>"><?php echo wp_kses_post( $title ); ?></div>
	</div>		
</section>
