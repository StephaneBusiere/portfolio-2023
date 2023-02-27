<?php
/**
 * Content block marquees.
 *
 * @package Blocks/marquees/Templates
 */

$marquee_1 = get_field( 'background_image_intro_1' );
$marquee_2 = get_field( 'background_image_intro_1' );
?>

<section <?php ign_block_attrs( $block, 'marquees-block full-width' ); ?>>
	<div class="marquees-wrapper">
		<div class="marquee">
			<div class="marquee-inner" aria-hidden="true">
				<span>Infogérance - Site Vitrine - Intranet - E-commerce - Hébergement - </span>
				<span>Infogérance - Site Vitrine - Intranet - E-commerce - Hébergement -</span>
			</div>
			<div class="marquee-inner" aria-hidden="true">
				<span>Etude - Conseils & stratégie - Application - ERP - Création Site - </span>
				<span>Etude - Conseils & stratégie - Application - ERP - Création Site - </span>
			</div>
		</div>
	</div>		
</section>
