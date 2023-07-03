<?php
/**
 * Content maison-dixeed block template.
 *
 * @package Blocks/maison-dixeed/Templates
 */

?>
<?php

$background_color = get_field( 'background_color_maison-dixeed' );
$description_text = get_field( 'text_maison-dixeed' );
$cta_link         = get_field( 'cta_link_maison' );
?>

<section <?php ign_block_attrs( $block, 'maison-dixeed-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>"data-scroll-section>

	<div class="maison-dixeed-container">
		<img class="line-maison-1"src="<?php echo get_template_directory_uri(); ?>/images/line-maison-1.svg " alt="">
		<img class="line-maison-2"src="<?php echo get_template_directory_uri(); ?>/images/line-maison-1.svg " alt="">
		<img class="line-maison-bas-1"src="<?php echo get_template_directory_uri(); ?>/images/line-maison-bas-1.svg " alt="">
		<img class="line-maison-bas-2"src="<?php echo get_template_directory_uri(); ?>/images/line-maison-bas-2.svg " alt="">
		<img class="rectangle-maison-1"src="<?php echo get_template_directory_uri(); ?>/images/rectangle-maison-1.svg " alt="">
		<img class="rectangle-maison-2"src="<?php echo get_template_directory_uri(); ?>/images/rectangle-maison-2.svg " alt="">
		<img class="rectangle-maison-3"src="<?php echo get_template_directory_uri(); ?>/images/rectangle-maison-3.svg " alt="">
		<img class="rectangle-maison-4"src="<?php echo get_template_directory_uri(); ?>/images/rectangle-maison-4.svg " alt="">
		<div class="image-maison" alt=""></div>
		<div class="maison-text-container">
			<div class="maison-title-container" data-splitting data-effect3 data-scroll data-scroll-speed="0">
						Bienvenue
			</div>
			<div class="maison-sub-title-container"data-splitting data-effect4 data-scroll data-scroll-speed="0">
			<?php echo __( 'à la maison Dixeed', 'dixeed-2023' ); ?>
			</div>	
			<div class="maison-description-text-container">
				<p class="maison-description-text"><?php echo wp_kses_post( $description_text ); ?></p>
				<div class="cta-maison <?php echo $cta_align; ?>">
				<a href="<?php echo esc_url( $cta_link['url'] ); ?>" title="<?php echo esc_attr( $cta_link['title'] ); ?>">
					<span class="shape"></span>
					<span class="text"><?php echo esc_attr( $cta_link['title'] ); ?></span>
				</a>
				</div>
			</div>
		</div>
		<div class="maison-image-container">
		</div>
	</div>
</section>
