<?php
/**
 * Block that display an realisations slider with arrows btns
 *
 * @package Blocks/realisations-slider
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function realisation_slider_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/realisations-slider',
			'title'           => __( '[Dixeed] Block slider realisations', 'dixeed-2023' ),
			'description'     => __( 'Block slider realisations', 'dixeed-2023' ),
			'render_template' => 'src/blocks/realisations-slider/realisation-slider-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'realisation-slider', get_template_directory_uri() . '/src/blocks/realisations-slider/realisation-slider-block.js', array(), '1.0.0', true );
			},
			'supports'        => array(
				'align'  => array( 'full' ),
				'anchor' => true,
				'color'  => array(
					'background' => false,
					'text'       => false,
				),

			),
		)
	);
}

// Check if function exists and hook into setup and adds all blocks.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'realisation_slider_register_acf_block' );
}
