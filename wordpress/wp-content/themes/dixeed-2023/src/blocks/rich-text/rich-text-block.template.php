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
$background_color = get_field( 'background_color_rich_text' );


?>

<section <?php ign_block_attrs( $block, 'rich-text-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>">

	<div class="rich-text-container">
		<div class="rich-text"><?php echo wp_kses_post( $text ); ?></div>
	</div>
</section>
