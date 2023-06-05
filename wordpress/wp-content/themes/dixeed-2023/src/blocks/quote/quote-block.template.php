<?php
$background_color = get_field( 'quote-background-color' );
$quote_text       = get_field( 'quote-text' );

?>

<section <?php ign_block_attrs( $block, 'quote-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>">

	<div class="quote-container">
		<div class="quote-text" >
			<?php echo wp_kses_post( $quote_text ); ?>
		</div>
		<div class="quote-icon" >
			<img class="quote-icon"src="<?php echo get_template_directory_uri(); ?>/images/quote-icon.svg " alt="">
		</div>
	</div>
</section>
