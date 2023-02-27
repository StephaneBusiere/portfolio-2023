<?php
/**
 * Content banner video fullwidth block template.
 *
 * @package Blocks/intro-1/Templates
 */

$background_image = get_field( 'background_image_intro_1' );
$background_color = get_field( 'background_color_intro_1' );
$title            = get_field( 'title_intro_1' );
?>

<section <?php ign_block_attrs( $block, 'video-fullwidth-block full-width' ); ?>>
	<div class="video-fullwidth-wrapper">
		
	</div>		
</section>
