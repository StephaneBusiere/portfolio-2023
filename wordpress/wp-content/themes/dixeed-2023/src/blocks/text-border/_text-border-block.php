<?php
/**
 * Block to display a text border.
 *
 * @package Blocks/text-border
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function text_border_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/text-border',
			'title'           => __( '[Dixeed] Block text avec un border', 'k-ip-ignition' ),
			'description'     => __( 'Block citation', 'k-ip-ignition' ),
			'render_template' => 'src/blocks/text-border/text-border-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
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
	add_action( 'acf/init', 'text_border_acf_block' );
}
