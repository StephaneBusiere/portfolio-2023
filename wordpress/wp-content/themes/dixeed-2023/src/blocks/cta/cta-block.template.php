<?php
/**
 * Content block cta.
 *
 * @package Blocks/cta/Templates
 */

$cta_text = get_field( 'cta_text' );
$cta_url = get_field( 'cta_url' );
$cta_align = get_field( 'cta_align' );
?>
<div <?php ign_block_attrs( $block, 'cta-block ' ); ?>>
	<div class="cta <?php echo $cta_align;?>">
		<a href="<?php echo $cta_url;?>" title="<?php echo $cta_text;?>">
			<span class="shape"></span>
			<span class="text"><?php echo $cta_text;?></span>
		</a>
	</div>
</div>