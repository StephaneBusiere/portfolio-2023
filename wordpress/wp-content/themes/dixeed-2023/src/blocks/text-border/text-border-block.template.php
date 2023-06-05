<?php
$background_color = get_field( 'text-border-background-color' );
$text_border_text = get_field( 'text-border-text' );

?>

<section <?php ign_block_attrs( $block, 'text-border-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>">

	<div class="text-border-container">
		<div class="text-border-text" >
			<?php echo wp_kses_post( $text_border_text ); ?>
		</div>
		<div class="text-border-icon" >
			<img class="text-border-icon"src="<?php echo get_template_directory_uri(); ?>/images/text-border-icon.svg " alt="">
		</div>
	</div>
</section>
