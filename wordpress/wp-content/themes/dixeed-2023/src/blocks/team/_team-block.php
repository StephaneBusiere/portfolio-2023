<?php
/**
 * Block that display an orizontal slider with arrows btns
 *
 * @package Blocks/team
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers a new block with ACF
 */
function team_register_acf_block() {
	acf_register_block_type(
		array(
			'name'            => 'Dixeed/team',
			'title'           => __( '[Dixeed] Block équipe', 'dixeed-2023' ),
			'description'     => __( 'Block équipe', 'dixeed-2023' ),
			'render_template' => 'src/blocks/team/team-block.template.php',
			'category'        => 'ign-custom',
			'icon'            => 'slides',
			'keywords'        => array( 'places', 'media', 'pattern' ),
			'enqueue_assets'  => function() {
				wp_enqueue_script( 'team', get_template_directory_uri() . '/src/blocks/team/team-block.js', array(), '1.0.0', true );
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
	add_action( 'acf/init', 'team_register_acf_block' );
}
