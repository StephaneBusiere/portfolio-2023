<?php
/**
 * Content section block registration.
 *
 * @package Blocks/ContentSection
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function content_section_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'dixeed/content-section',
			'title'           => __( '[Dixeed] Section de contenu', 'k-ip-ignition' ),
			'description'     => __( 'Section of content', 'k-ip-ignition' ),
			'render_template' => 'src/blocks/content-section/content-section-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'align-wide',
			'keywords'        => array( 'section', 'content', 'row' ),
			'supports'        => array(
				'align'  => array( 'full', 'wide' ),
				'anchor' => true,
				'color'  => array(
					'background' => true,
					'text'       => false,
				),
				'jsx'    => true,
			),
		)
	);
}



// Check if function exists and hook into setup and adds all blocks.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'content_section_register_acf_block' );
}
