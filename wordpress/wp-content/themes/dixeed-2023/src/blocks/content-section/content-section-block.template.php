<?php
/**
 * Content section block template.
 *
 * @package Blocks/ContentSection/Templates
 */


$background_class = empty( $block['backgroundColor'] ) ? '' : ' has-' . $block['backgroundColor'] . '-background-color';
$background_color = get_field( 'content-section-background-color' );
$padding_choices  = get_field( 'section-padding' );


?>
<section <?php ign_block_attrs( $block, 'section-content-block full-width' . $background_class ); ?> data-scroll-section>
<?php
if ( $padding_choices ) :
	foreach ( $padding_choices as $padding_choice ) :
		?>

	<div class="container-content <?php echo $padding_choice; ?> " style = background-color:<?php echo esc_attr( $background_color ); ?>>
	<InnerBlocks /> 
	</div>
		<?php
	endforeach;
endif;
?>

</section>
