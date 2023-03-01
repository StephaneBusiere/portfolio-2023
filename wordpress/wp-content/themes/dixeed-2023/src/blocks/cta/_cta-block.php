<?php
/**
 * Block to display regular cta
 *
 * @package Blocks/cta
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function cta_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/cta',
			'title'           => __( '[Dixeed] Block cta', 'dixeed-2023' ),
			'description'     => __( 'Block call to action', 'dixeed-2023' ),
			'render_template' => 'src/blocks/cta/cta-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'cta', get_template_directory_uri() . '/src/blocks/cta/cta-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'cta_register_acf_block' );
}
