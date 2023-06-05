<?php
/**
 * DIXEED: register custom post type
 *
 * @package BCTGn
 * @since 1.0
 */

 /*-------------------------------------
  Register Custom Post Type
---------------------------------------*/


function realisations_register_post_types() {
	
	$labels = array(
		'name'          => 'Réalisations',
		'all_items'     => 'Toutes les réalisations',  // affiché dans le sous menu
		'singular_name' => 'Réalisation',
		'add_new_item'  => 'Ajouter une réalisation',
		'edit_item'     => 'Modifier une réalisation',
		'menu_name'     => 'Réalisations',
	);

	$args = array(
		'labels'          => $labels,
		'public'          => true,
		'show_in_rest'    => true,
		'has_archive'     => true,
		'supports'        => array( 'title', 'editor', 'thumbnail','author' ),
		'menu_position'   => 5,
		'menu_icon'       => 'dashicons-star-empty',
		'capability_type' => 'post',
		'hierarchical'    => false,
		'taxonomies'  => array( 'category' ),
	);

	register_post_type( 'realisations-dixeed', $args );
};

add_action( 'init', 'realisations_register_post_types' );