<?php
/**
 * Block to display post navigation
 *
 * @package Blocks/post-navigation
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function post_navigation_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/post-navigation',
			'title'           => __( '[Dixeed] Block post-navigation', 'dixeed-2023' ),
			'description'     => __( 'post-navigation', 'dixeed-2023' ),
			'render_template' => 'src/blocks/post-navigation/post-navigation-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
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
	add_action( 'acf/init', 'post_navigation_register_acf_block' );
}
