<?php
/**
 * Content text-image block template.
 *
 * @package Blocks/text-image/Templates
 */

?>
<?php
$image            = get_field( 'image' );
$image_mobile     = get_field( 'image_mobile_image_block' );
$background_image = get_field( 'background-image-block' );
$background_color = get_field( 'background_color' );

$align_image_block    = get_field( 'image-block-horizontal-align' );
$vertical_align_image = get_field( 'image-vertical-align' );
$text                 = get_field( 'text' );
$align_text           = get_field( 'text-horizontal-align' );
$vertical_align_text  = get_field( 'text-vertical-align' );
$text_position        = get_field( 'image_text_choice' );
$text_spacing         = get_field( 'image_text_spacing' );
$text_type            = get_field( 'image-text-type-choice' );

$title_text_icon = get_field( 'title-text-icon' );






?>

<section <?php ign_block_attrs( $block, 'text-image-section full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>" data-scroll-section>

	<div class="text-image-container <?php echo esc_attr( $text_position [0] ); ?> <?php echo esc_attr( $text_spacing [0] ); ?>">
		<div class="image-container" style="background-image:url(<?php echo esc_url( $background_image ); ?>);align-items:<?php echo esc_attr( $align_image_block[0] ); ?>;justify-content:<?php echo esc_attr( $vertical_align_image[0] ); ?>"data-scroll data-scroll-speed="0" >
		<?php if ( $image_mobile ) : ?>
			<img class="image-mobile" src="<?php echo esc_url( $image_mobile ); ?>" alt="">
			<?php else : ?>
			<img class="image-mobile" src="<?php echo esc_url( $image ); ?>" alt="">
			<?php endif; ?>
			<img class="image" src="<?php echo esc_url( $image ); ?>" alt="">
		</div>
		<?php if ( $text_type[0] === 'text' ) : ?>
		<div class="block-text-container" style="background-color:<?php echo esc_attr( $background_color ); ?>;justify-content:<?php echo esc_attr( $vertical_align_text[0] ); ?>" data-splitting data-effect2 data-scroll data-scroll-repeat data-scroll-speed="0" data-scroll-offset="300px"><?php the_field( 'text' ); ?></div>
		<?php endif; ?>
		<?php
		if ( $text_type[0] === 'icon' ) :
			?>
			<div class="image-icon-text-container" style="background-color:<?php echo esc_attr( $background_color ); ?>">
				<div class="icon-text-title"><?php echo esc_attr( $title_text_icon ); ?></div>
				<?php
				if ( have_rows( 'image-icon-text-block' ) ) :
					?>
					<?php while ( have_rows( 'image-icon-text-block' ) ) : ?>
						<?php
						the_row();
						$image_text_icon = get_sub_field( 'image-text-icon' );
						$text_text_icon  = get_sub_field( 'text-text-image-icon' );
						?>
					<div class="image-icon-text-content">
					<img class="image-icon-image"src="<?php echo esc_url( $image_text_icon ); ?>" alt="">
					<div class="image-icon-text"><?php echo wp_kses_post( $text_text_icon ); ?></div>
				</div>
					<?php endwhile; ?>
					<?php endif; ?>
			</div>
			<?php endif; ?>
	</div>
</section>
