<?php
/**
 * Block to display a skills cards block.
 *
 * @package Blocks/skills-cards
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function skills_cards_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/skills-cards',
			'title'           => __( '[Dixeed] Cartes de compétences', 'k-ip-ignition' ),
			'description'     => __( 'Block cartes de compétances', 'k-ip-ignition' ),
			'render_template' => 'src/blocks/skills-cards/skills-cards-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'skills-cards', get_template_directory_uri() . '/src/blocks/skills-cards/skills-cards-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'skills_cards_register_acf_block' );
}
