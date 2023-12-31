<?php
/**
 * Content block circle-outline-text.
 *
 * @package Blocks/circle-outline-text/Templates
 */

$circle_text       = get_field( 'circle_text' );
$circle_text_color = get_field( 'circle_text_color' );
$title              = get_field( 'circle_text_title' );
?>

<div <?php ign_block_attrs( $block, 'circle-outline-text-block full-width' ); ?>data-scroll-section>
	<?php if ( $title ) : ?>
	<div class="block-text-container-circle" style="background-color:<?php echo esc_attr( $background_color ); ?>" data-splitting data-effect7 data-scroll data-scroll-repeat data-scroll-speed="0"><?php the_field( 'circle_text_title' ); ?>
	</div>
<?php endif ?>
	<div class="circle-outline-text">
		<svg viewBox="0 0 100 100" width="100" height="100">
		  <defs>
			<path id="circle"
			  d="
				M 50, 50
				m -37, 0
				a 37,37 0 1,1 74,0
				a 37,37 0 1,1 -74,0"/>
		  </defs>
		  <text fill="<?php echo $circle_text_color; ?>">
			<textPath xlink:href="#circle">
			  <?php echo $circle_text; ?>
			</textPath>
		  </text>
		</svg>
	</div>		
</div>
