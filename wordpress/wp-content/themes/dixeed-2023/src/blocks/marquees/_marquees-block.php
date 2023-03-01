<?php
/**
 * Block to display marquees with animation
 *
 * @package Blocks/marquees
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function marquees_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/marquees',
			'title'           => __( '[Dixeed] Bloc marquees', 'dixeed-2023' ),
			'description'     => __( 'Block avec texte qui défile', 'dixeed-2023' ),
			'render_template' => 'src/blocks/marquees/marquees-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'marquees', get_template_directory_uri() . '/src/blocks/marquees/marquees-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'marquees_register_acf_block' );
}
