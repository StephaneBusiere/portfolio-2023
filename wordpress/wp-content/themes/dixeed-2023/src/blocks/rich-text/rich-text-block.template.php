<?php
/**
 * Content rich-text block template.
 *
 * @package Blocks/rich-text/Templates
 */

?>
<?php

$text              = get_field( 'rich_text_block' );
$chapo_block_align = get_field( 'chapo_block_align' );
$background_color  = get_field( 'background_color_rich_text' );
$split_effect      = get_field( 'rich-text-split-effect' );


?>

<section <?php ign_block_attrs( $block, 'rich-text-section' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>"data-scroll-section>
<?php if ( $split_effect === true ) : ?>
	<div class="rich-text-container" data-splitting data-effect6 data-scroll data-scroll-repeat data-scroll-speed="0" data-scroll-offset="300px">
		<div class="rich-text"><?php echo wp_kses_post( $text ); ?></div>
	</div>
<?php endif; ?>
<?php if ( $split_effect === false ) : ?>
	<div class="rich-text-container"  data-scroll data-scroll-repeat data-scroll-speed="0" data-scroll-offset="300px">
		<div class="rich-text"><?php echo wp_kses_post( $text ); ?></div>
	</div>
<?php endif; ?>
</section>
