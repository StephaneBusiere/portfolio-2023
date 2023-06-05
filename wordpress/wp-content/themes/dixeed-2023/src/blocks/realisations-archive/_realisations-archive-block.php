<?php
/**
 * Block that display an realisations archive
 *
 * @package Blocks/realisations-archive
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function realisation_archive_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/realisations-archive',
			'title'           => __( '[Dixeed] Block archive realisations', 'dixeed-2023' ),
			'description'     => __( 'Block archive realisations', 'dixeed-2023' ),
			'render_template' => 'src/blocks/realisations-archive/realisations-archive-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'realisations-archive', get_template_directory_uri() . '/src/blocks/realisations-archive/realisations-archive-block.js', array(), '1.0.0', true );
				wp_localize_script( 'realisations-archive', 'ajax_url', admin_url( 'admin-ajax.php' ) ) ;
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
	add_action( 'acf/init', 'realisation_archive_register_acf_block' );
}
