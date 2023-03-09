<?php
/**
 * Content block marquees.
 *
 * @package Blocks/marquees/Templates
 */

$marquee_ligne_1  = get_field( 'marquee_ligne_1' );
$marquee_ligne_2  = get_field( 'marquee_ligne_2' );
$background_color = get_field( 'background_color_marquee' );
?>

<section <?php ign_block_attrs( $block, 'marquees-block full-width' ); ?> style="background-color:<?php echo esc_attr( $background_color ); ?>">
	<div class="marquees-wrapper">
		<div class="marquee">
			<?php
			if ( $marquee_ligne_1 ) {
				?>
					<div class="marquee-inner" aria-hidden="true">
						<span><?php echo $marquee_ligne_1; ?></span>
						<span><?php echo $marquee_ligne_1; ?></span>
					</div>
				<?php
			}
			?>
			<?php
			if ( $marquee_ligne_2 ) {
				?>
					<div class="marquee-inner" aria-hidden="true">
						<span><?php echo $marquee_ligne_2; ?></span>
						<span><?php echo $marquee_ligne_2; ?></span>
					</div>
				<?php
			}
			?>
		</div>
	</div>		
</section>
