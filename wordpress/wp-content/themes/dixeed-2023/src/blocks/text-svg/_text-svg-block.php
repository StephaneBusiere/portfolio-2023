<?php
/**
 * Block to display text-svg block
 *
 * @package Blocks/text-svg
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function text_svg_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/text-svg',
			'title'           => __( '[Dixeed] Block text-svg', 'dixeed-2023' ),
			'description'     => __( 'Block text avec svg en backgroud', 'dixeed-2023' ),
			'render_template' => 'src/blocks/text-svg/text-svg-block.template.php',
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
	add_action( 'acf/init', 'text_svg_register_acf_block' );
}
