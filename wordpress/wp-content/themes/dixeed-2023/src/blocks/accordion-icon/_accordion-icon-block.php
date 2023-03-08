<?php
/**
 * Block to display a accordion + icon.
 *
 * @package Blocks/accordion-icon
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function accordion_icon_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'dixeed/accordion-icon',
			'title'           => __( '[Dixeed] Accordéon avec icône', 'dixeed-2023' ),
			'description'     => __( 'Block accordéon et icône', 'dixeed-2023' ),
			'render_template' => 'src/blocks/accordion-icon/accordion-icon-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'table-row-after',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'accordion-icon', get_template_directory_uri() . '/src/blocks/accordion-icon/accordion-icon-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'accordion_icon_register_acf_block' );
}
