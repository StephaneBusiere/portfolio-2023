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
	<svg class="line-text-svg-1" width="1000" height="485" viewBox="0 0 788 485" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1146.5 306C1146.5 404.583 1066.58 484.5 968 484.5L789 484.5L242.5 484.5C108.847 484.5 0.50001 376.153 0.500021 242.5C0.500033 108.847 108.847 0.500001 242.5 0.500012L789 0.50006L904.5 0.50007C1038.15 0.500082 1146.5 108.847 1146.5 242.5L1146.5 306Z" stroke="#5BE0E5"/>
</svg>
		<!-- <img class="line-text-svg-1"src="<?php echo get_template_directory_uri(); ?>/images/rectangle-text-svg-1.svg " alt=""> -->
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
