<?php
/**
 * Content block cta-arrow.
 *
 * @package Blocks/cta-arrow/Templates
 */

$cta_arrow_text = get_field( 'cta_arrow_text' );
$cta_arrow_url = get_field( 'cta_arrow_url' );
$cta_arrow_align = get_field( 'cta_arrow_align' );
?>
<div <?php ign_block_attrs( $block, 'cta-arrow-block' ); ?>>
	<div class="cta-arrow <?php echo $cta_arrow_align;?>">
		<a href="<?php echo $cta_arrow_url;?>" title="<?php echo $cta_arrow_text;?>">
			<svg width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg"><path d="M13 0.333352L15.2562 2.55002L6.38954 11.4167L25.6666 11.4167L25.6666 14.5834L6.38954 14.5834L15.2562 23.45L13 25.6667L0.333293 13L13 0.333352Z"></path></svg>
		</a>
	</div>
</div>