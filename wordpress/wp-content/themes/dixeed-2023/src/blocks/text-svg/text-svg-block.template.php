<?php
/**
 * Content text-svg block template.
 *
 * @package Blocks/text-svg/Templates
 */

?>
<?php

$background_color = get_field( 'background_color_text-svg' );
$main_title       = get_field( 'title_text-svg' );
$description_text = get_field( 'text-svg_text' );

?>

<section <?php ign_block_attrs( $block, 'text-svg-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>"data-scroll-section>

	<div class="text-svg-container">
		<img class="line-text-svg-1"src="<?php echo get_template_directory_uri(); ?>/images/rectangle-text-svg-1.svg " alt="">
		<img class="line-text-svg-2"src="<?php echo get_template_directory_uri(); ?>/images/rectangle-text-svg-2.svg " alt="">
		<div class="text-svg-text-container">
			<div class="text-svg-title-container">
						<h2 class="text-svg-title"><?php echo wp_kses_post( $main_title ); ?></h2>
			</div>
			<div class="text-svg-description-container">
				<p class="text-svg-description-text"><?php echo wp_kses_post( $description_text ); ?></p>
			</div>
	</div>
</section>
