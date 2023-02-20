<?php
/**
 * Additional features to allow styling of the templates easier by adding classes to the body
 *
 * @package dixeed-2023
 * @since 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function dixeed_2023_body_classes( $classes ) {
	// Add class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class if we're viewing the Customizer for easier styling of theme options.
	if ( is_customize_preview() ) {
		$classes[] = 'dixeed-2023-customizer';
	}

	// Add class on front page.
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'dixeed-2023-front-page';
	}

	// Add a class if there is a custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Add class if sidebar is used.
	if ( is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'has-sidebar';
	}

	if(get_page_template_slug() == 'sidebar-left.php' || get_page_template_slug() == 'sidebar-right.php'){
		$classes[] = 'has-sidebar-template';
	}


	// adds users role as class
	if ( is_user_logged_in() ) {
		$current_user = new WP_User( get_current_user_id() );
		$user_role    = array_shift( $current_user->roles );
		$classes[]    = 'role-' . $user_role;
	}


	// Add class if the site title and tagline is hidden.
	if ( 'blank' === get_header_textcolor() ) {
		$classes[] = 'title-tagline-hidden';
	}


	return $classes;
}

add_filter( 'body_class', 'dixeed_2023_body_classes' );








