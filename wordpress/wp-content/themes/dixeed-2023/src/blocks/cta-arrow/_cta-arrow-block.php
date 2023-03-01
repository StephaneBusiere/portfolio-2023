<?php
/**
 * Block to display arrow cta
 *
 * @package Blocks/cta-arrow
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function cta_arrow_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/cta-arrow',
			'title'           => __( '[Dixeed] Block cta arrow', 'dixeed-2023' ),
			'description'     => __( 'Block call to action avec fleche', 'dixeed-2023' ),
			'render_template' => 'src/blocks/cta-arrow/cta-arrow-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'cta-arrow', get_template_directory_uri() . '/src/blocks/cta-arrow/cta-arrow-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'cta_arrow_register_acf_block' );
}
