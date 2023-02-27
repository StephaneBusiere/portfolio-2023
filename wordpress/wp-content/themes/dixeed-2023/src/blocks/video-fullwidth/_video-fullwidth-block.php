<?php
/**
 * Block to display a background image and a text.
 *
 * @package Blocks/video-fullwidth
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function video_fullwidth_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/video-fullwidth',
			'title'           => __( '[Dixeed] Bannière video pleine largeur', 'k-ip-ignition' ),
			'description'     => __( 'Block bannière video pleine largeur', 'k-ip-ignition' ),
			'render_template' => 'src/blocks/video-fullwidth/video-fullwidth-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'video-fullwidth', get_template_directory_uri() . '/src/blocks/video-fullwidth/video-fullwidth-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'video_fullwidth_register_acf_block' );
}
