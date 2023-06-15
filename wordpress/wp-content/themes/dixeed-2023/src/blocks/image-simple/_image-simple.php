<?php
/**
 * Block to display a simple image.
 *
 * @package Blocks/image-simple
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function image_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/image-simple',
			'title'           => __( '[Dixeed]image', 'dixeed-2023' ),
			'description'     => __( 'Block image', 'dixeed-2023' ),
			'render_template' => 'src/blocks/image-simple/image-simple.template.php',
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
	add_action( 'acf/init', 'image_register_acf_block' );
}
