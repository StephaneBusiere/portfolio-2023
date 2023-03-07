<?php
/**
 * Block that display vertical infinite carousel
 *
 * @package Blocks/vertical-carousel
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function vertical_carousel_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/vertical-carousel',
			'title'           => __( '[Dixeed] Block carousel vertical', 'dixeed-2023' ),
			'description'     => __( 'Block carousel vertical', 'dixeed-2023' ),
			'render_template' => 'src/blocks/vertical-carousel/vertical-carousel-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'vertical-carousel', get_template_directory_uri() . '/src/blocks/vertical-carousel/vertical-carousel-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'vertical_carousel_register_acf_block' );
}
