<?php
/**
 * Block to display animated circle text outline
 *
 * @package Blocks/circle-outline-text
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function circle_outline_text_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/circle-outline-text',
			'title'           => __( '[Dixeed] Block texte circulaire animé', 'dixeed-2023' ),
			'description'     => __( 'Block texte circulaire animé', 'dixeed-2023' ),
			'render_template' => 'src/blocks/circle-outline-text/circle-outline-text-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'circle-outline-text', get_template_directory_uri() . '/src/blocks/circle-outline-text/circle-outline-text-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'circle_outline_text_register_acf_block' );
}
