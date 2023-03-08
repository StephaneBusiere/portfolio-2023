<?php
/**
 * Block to display a rich textblock.
 *
 * @package Blocks/rich-text
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function rich_text_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/texte-riche',
			'title'           => __( '[Dixeed] Texte enrichi', 'dixeed-2023' ),
			'description'     => __( 'Block texte riche', 'dixeed-2023' ),
			'render_template' => 'src/blocks/rich-text/rich-text-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'media-document',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'supports'        => array(
				'align'  => true,
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
	add_action( 'acf/init', 'rich_text_register_acf_block' );
}
