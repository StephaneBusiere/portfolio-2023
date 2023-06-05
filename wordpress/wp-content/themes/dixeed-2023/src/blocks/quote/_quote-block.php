<?php
/**
 * Block to display a quote.
 *
 * @package Blocks/quote
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function quote_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/quote',
			'title'           => __( '[Dixeed] Block citation', 'k-ip-ignition' ),
			'description'     => __( 'Block citation', 'k-ip-ignition' ),
			'render_template' => 'src/blocks/quote/quote-block.template.php',
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
	add_action( 'acf/init', 'quote_acf_block' );
}
