<?php
/**
 * Block to display a animated scroll icon.
 *
 * @package Blocks/scroll-icon
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function scroll_icon_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/scroll-icon',
			'title'           => __( '[Dixeed]scroll icon', 'dixeed-2023' ),
			'description'     => __( 'Block icone scroll', 'dixeed-2023' ),
			'render_template' => 'src/blocks/icon-scroll/icon-scroll.template.php',
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
	add_action( 'acf/init', 'scroll_icon_register_acf_block' );
}
