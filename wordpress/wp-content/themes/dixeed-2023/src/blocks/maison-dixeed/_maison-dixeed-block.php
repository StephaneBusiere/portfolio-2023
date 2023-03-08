<?php
/**
 * Block to display a maison dixeed block
 *
 * @package Blocks/maison-dixeed
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function maison_dixeed_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'dixeed/block-maison',
			'title'           => __( '[Dixeed] Block maison', 'dixeed-2023' ),
			'description'     => __( 'Block maison', 'dixeed-2023' ),
			'render_template' => 'src/blocks/maison-dixeed/maison-dixeed-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'table-row-after',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'maison-dixeed', get_template_directory_uri() . '/src/blocks/maison-dixeed/maison-dixeed-block.js', array(), '1.0.0', true );
			},
			'supports'        => array(
				'align'  => array( 'full', 'wide', 'center' ),
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
	add_action( 'acf/init', 'maison_dixeed_register_acf_block' );
}
