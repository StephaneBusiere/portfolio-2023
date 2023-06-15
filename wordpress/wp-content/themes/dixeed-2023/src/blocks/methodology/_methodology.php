<?php
/**
 * Block to display a methodology content.
 *
 * @package Blocks/methodology
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function methodology_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/methodology',
			'title'           => __( '[Dixeed] methodologie', 'dixeed-2023' ),
			'description'     => __( 'Block methodologie', 'dixeed-2023' ),
			'render_template' => 'src/blocks/methodology/methodology.template.php',
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
	add_action( 'acf/init', 'methodology_register_acf_block' );
}
