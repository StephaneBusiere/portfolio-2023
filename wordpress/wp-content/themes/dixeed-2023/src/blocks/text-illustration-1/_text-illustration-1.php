<?php
/**
 * Block to display a background image and a text.
 *
 * @package Blocks/text-illustration-1
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function text_illustration_1_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/text-illustration',
			'title'           => __( '[Dixeed] text avec image', 'k-ip-ignition' ),
			'description'     => __( 'Block texte avec image', 'k-ip-ignition' ),
			'render_template' => 'src/blocks/text-illustration-1/text-illustration-1.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'id',
			'keywords'        => array( 'places', 'media', 'pattern' ),
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
	add_action( 'acf/init', 'text_illustration_1_register_acf_block' );
}
