<?php
/**
 * Block to display a background image and a text.
 *
 * @package Blocks/intro-maison
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function intro_maison_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/intro-maison',
			'title'           => __( '[Dixeed] intro-maison', 'k-ip-ignition' ),
			'description'     => __( 'Intro maison', 'k-ip-ignition' ),
			'render_template' => 'src/blocks/intro-maison/intro-maison-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'intro-1', get_template_directory_uri() . '/src/blocks/intro-maison/intro-maison-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'intro_maison_register_acf_block' );
}
