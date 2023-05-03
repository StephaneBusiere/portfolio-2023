<?php
/**
 * Block to display a text xith vertical title.
 *
 * @package Blocks/text-vertical-title
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function text_vertical_title_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/text-vertical-title',
			'title'           => __( '[Dixeed] texte avec titre vertical', 'k-ip-ignition' ),
			'description'     => __( 'Block texte avec titre vertical', 'k-ip-ignition' ),
			'render_template' => 'src/blocks/text-vertical-title/text-vertical-title-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'intro-1', get_template_directory_uri() . '/src/blocks/text-vertical-title/text-vertical-title.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'text_vertical_title_acf_block' );
}
