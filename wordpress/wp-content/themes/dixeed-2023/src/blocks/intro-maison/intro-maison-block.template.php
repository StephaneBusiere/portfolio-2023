<?php
/**
 * Content intro 1 block template.
 *
 * @package Blocks/intro-1/Templates
 */

$background_image = get_field( 'background_image_intro_maison' );
$background_color = get_field( 'background_color_intro_maison' );
$title           = get_field( 'title_intro_maison' );
$text           = get_field( 'text_intro_maison' );
?>

<section <?php ign_block_attrs( $block, 'intro-maison-block full-width' ); ?> data-scroll-section >
	<div class="intro-maison-wrapper"  data-scroll data-scroll-speed="0" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo esc_url( $background_image ); ?>), no-repeat; background-size:cover">
		<div class="intro-maison-title" data-splitting data-effect10 data-scroll data-scroll-speed="2" style="color:<?php echo ( $text_color ); ?>"><?php echo wp_kses_post( $title ); ?></div>
		<div class="intro-maison-text" data-splitting data-effect10 data-scroll data-scroll-speed="2" style="color:<?php echo ( $text_color ); ?>"><?php echo wp_kses_post( $text ); ?></div>
	</div>		
</section>
