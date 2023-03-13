<?php


//add styles and js for acf back end
function my_acf_admin_enqueue_scripts() {
	wp_enqueue_style( 'ign_acf_styles', get_template_directory_uri() . '/inc/acf_extras/acf_styles.css' );

	//js should only happen on edit screens
	if ( is_admin() ) {
		$screen = get_current_screen();
		if ( $screen->post_type != 'acf-field-group' ) {
			wp_enqueue_script( 'ign_acf_scripts', get_template_directory_uri() . '/inc/acf_extras/acf_scripts.js', '', wp_get_theme()->get( 'Version' ) );
		}
	}

}

add_action( 'acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts', 99 );


//change the post labels
function change_post_object_label() {
	$post_label   = get_option( 'options_posts_label_singular' );
	$post_label_p = get_option( 'options_posts_label_plural' );
	if ( $post_label ) {
		global $wp_post_types;
		$labels                     = &$wp_post_types['post']->labels;
		$labels->name               = $post_label_p;
		$labels->singular_name      = $post_label;
		$labels->add_new            = 'Add New ' . $post_label;
		$labels->add_new_item       = 'Add New ' . $post_label;
		$labels->edit_item          = 'Edit ' . $post_label;
		$labels->new_item           = $post_label;
		$labels->view_item          = 'View ' . $post_label;
		$labels->search_items       = 'Search ' . $post_label_p;
		$labels->not_found          = 'No ' . $post_label_p . ' found';
		$labels->not_found_in_trash = 'No' . $post_label_p . 'found in Trash';
		$labels->name_admin_bar     = $post_label_p;
	}
}

add_action( 'init', 'change_post_object_label', 10 );

function change_post_menu_label() {
	$post_label   = get_option( 'options_posts_label_singular' );
	$post_label_p = get_option( 'options_posts_label_plural' );

	if ( $post_label ) {
		global $menu;
		global $submenu;
		$menu[5][0]                 = $post_label_p;
		$submenu['edit.php'][5][0]  = $post_label;
		$submenu['edit.php'][10][0] = 'Add New';
	}
}

add_action( 'admin_menu', 'change_post_menu_label' );


/*
 * Add Theme options page to streamline some easy steps
 */
function ign_post_type_options() {

	if ( function_exists( 'acf_add_options_page' ) ) {
		//add theme options page
		acf_add_options_page( array(
			'page_title' => 'Ignition General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false,
			'position'   => '4.1'
		) );


		//add options for other post types if chosen

		$option_pages = get_field( 'archive_option_pages', 'option' );
		if ( $option_pages ) {
			foreach ( $option_pages as $option_page ) {

				$post_type = get_post_type_object( $option_page );
				if ( $post_type ) {
					$labels = $post_type->labels;

					if ( $post_type->name == 'post' ) {
						$parent = 'edit.php';
					} else {
						$parent = 'edit.php?post_type=' . $post_type->name;
					}

					acf_add_options_page( array(
						'page_title'  => $labels->singular_name . ' Options',
						'menu_title'  => $labels->singular_name . ' Options',
						'parent_slug' => $parent,
						'post_id'     => $post_type->name . '_option'
					) );
				}
			}
		}
	}

}

add_action( 'wp_loaded', 'ign_post_type_options' );



/**
 * @param $categories
 * @param $post
 *
 * @return array
 *
 * Adding a new Block category for this theme
 */
function ign_block_categories( $categories, $post ) {
	return array_merge(
		array(
			array(
				'slug'  => 'ign-custom',
				'title' => __( 'Ignition', 'dixeed-2023' ),
//				'icon'  => 'marker',
			),
		),
		$categories
	);
}

add_filter( 'block_categories', 'ign_block_categories', 10, 2 );



/*
 * Load all post types for choosing when to use archive option pages
 */
function load_post_types( $field ) {

	$ign_post_types   = get_post_types( array( '_builtin' => false, 'public' => true ), 'objects' );
	$ign_post_types[] = get_post_type_object( 'post' );

	$field['choices'] = array();
	foreach ( $ign_post_types as $key => $post_type ) {
		if ( $post_type->name == 'post' && $post_label = get_field( 'posts_label_plural', 'option' ) ) {
			$post_type->label = $post_label;
		}

		$field['choices'][ $post_type->name ] = $post_type->label;
	}

	return $field;
}

add_filter( 'acf/load_field/name=archive_option_pages', 'load_post_types', 99 );


//add new field Admin only. wont show field unless your an admin
function ign_admin_field_settings( $field ) {

	acf_render_field_setting( $field, array(
		'label'        => __( 'Admin Only?' ),
		'instructions' => '',
		'name'         => 'admin_only',
		'type'         => 'true_false',
		'ui'           => 1,
	), true );

}

add_action( 'acf/render_field_settings', 'ign_admin_field_settings' );


add_action( 'acf/render_field_settings/type=text', 'ign_add_autocomplete' );

function ign_add_autocomplete( $field ) {

	acf_render_field_setting( $field, array(
		'label'        => __( 'Add Autocomplete' ),
		'instructions' => __( 'Enter words one on each new line for autocomplete' ),
		'name'         => 'autocomplete',
		'type'         => 'textarea',
	) );
}


function ign_admin_prepare_field( $field ) {

	// bail early if no 'admin_only' setting
	if ( empty( $field['admin_only'] ) ) {
		return $field;
	}
	// return false if is not admin (removes field)
	if ( ! current_user_can( 'administrator' ) ) {
		return false;
	}

	return $field;
}

add_filter( 'acf/prepare_field', 'ign_admin_prepare_field' );


//add new field to a custom field. ign data attribute
//This attribute allows you to make a input field send its values as a class to another field. useful when making text sections and wanting to see them on a grid
//todo decide if this is still necessary when you can preview in gutenberg
function ign_data_field_settings( $field ) {

	acf_render_field_setting( $field, array(
		'label'        => __( 'Set Value as Class' ),
		'instructions' => 'The value of this custom field will now be added as a class to the matching closest selector. Use .acf-row to affect this fields container.',
		'name'         => 'ign_set_data',
		'type'         => 'text',
		'placeholder'  => '.acf-row',
		'menu_order'   => 0
	), true );

}

add_action( 'acf/render_field_settings/type=text', 'ign_data_field_settings' );
add_action( 'acf/render_field_settings/type=true_false', 'ign_data_field_settings' );


/**
 * @param $field
 * adds a data attribute to the text input
 * then with js we give that value as a class to another element based on selector chosen
 */
function ign_show_data_field( $field ) {

	if ( ! empty( $field['autocomplete'] ) ) {
		echo '
		<script>
		let automcomplete = ' . json_encode( $field['autocomplete'] ) . '.split("\n");
		jQuery( "#' . $field["id"] . '" ).autocomplete({
      source: automcomplete
    });
		</script>

		';
	}


	if ( ! empty( $field['ign_set_data'] ) ) {
		//this script runs once and the repeated fields just get cloned.
		echo '
            <script>
            {
           //get the ign data attribute and set it to the input field
         let acfinput = document.querySelector("#' . $field['id'] . '");
         //set the attribute value to the selector chosen
          acfinput.setAttribute("data-ign-class", "' . $field['ign_set_data'] . '");

         }
        </script>';

	}
}

add_filter( 'acf/render_field', 'ign_show_data_field', 11, 1 );


//add classes to a wysywig field so you can control the design a bit more for each field
function acf_plugin_wysiwyg_styling() { ?>
    <script>
       (function ($) {
          acf.add_filter('wysiwyg_tinymce_settings', function (mceInit, id, $field) {
             var fieldKey = $field.data('key')
             var fieldName = $field.data('name')
             var flexContentName = $field.parents('[data-type="flexible_content"]').first().data('name')
             var layoutName = $field.parents('[data-layout]').first().data('layout')

             mceInit.body_class += ' acf-field-key-' + fieldKey
             mceInit.body_class += ' acf-field-name-' + fieldName
             if (flexContentName) {
                mceInit.body_class += ' acf-flex-name-' + flexContentName
             }
             if (layoutName) {
                mceInit.body_class += ' acf-layout-' + layoutName
             }
             // console.log(fieldName);
             if (flexContentName==='header_layout') {
                // mceInit.body_class += " entry-header";
             }
             return mceInit
          })

       })(jQuery)
    </script>
	<?php
}

add_action( 'acf/input/admin_footer', 'acf_plugin_wysiwyg_styling' );



/**
 * Adds a custom color palette for Gutenberg blocs.
 */
function wpdc_add_custom_gutenberg_color_palette() {
	$colors = get_dixeed_colors_palette();

	add_theme_support( 'editor-color-palette', $colors );
}

add_action( 'after_setup_theme', 'wpdc_add_custom_gutenberg_color_palette' );

/**
 * Returns the colors palette for the theme.
 */
function get_dixeed_colors_palette() {
	return array(
		array(
			'name'  => esc_html__( 'Blanc cassé', 'dixeed-2023' ),
			'slug'  => 'blanc-casse',
			'color' => '#EFEAE7',
		),
		array(
			'name'  => esc_html__( 'Blanc', 'dixeed-2023' ),
			'slug'  => 'blanc',
			'color' => '#ffffff',
		),
		array(
			'name'  => esc_html__( 'Gris clair', 'dixeed-2023' ),
			'slug'  => 'gris-clair',
			'color' => '#DED5CD',
		),
		array(
			'name'  => esc_html__( 'Bleu foncé', 'magner-ignition' ),
			'slug'  => 'bleu-fonce',
			'color' => '#1D4259',
		),
		array(
			'name'  => esc_html__( 'Blanc glacé', 'magner-ignition' ),
			'slug'  => 'blanc-glace',
			'color' => '#fbfdff',
		),
	);
}
function add_default_color_acf_picker() {
	?>
	<script type="text/javascript">
	(function($) {
	acf.add_filter('color_picker_args', function( args, $field ){
	// add the hexadecimal codes here for the colors you want to appear as swatches
	args.palettes = ['#EFEAE7', '#ffffff','#DED5CD','#1D4259','#fbfdff']
	// return colors
	return args;
	});
	})(jQuery);
	</script>
	<?php
}
	add_action( 'acf/input/admin_footer', 'add_default_color_acf_picker' );


/**
 * Customize the default color palette for TinyMce editor
 *
 * @param array $options The TinyMCE options.
 */
function dixeed_custom_color_tinymce( $options ) {
	$colors_palette = get_dixeed_colors_palette();

	$colors = array_reduce(
		$colors_palette,
		function ( $acc, $color_item ) {
			$acc[] = substr( $color_item['color'], 1 );
			$acc[] = $color_item['name'];

			return $acc;
		},
		array()
	);

	$options['textcolor_map'] = wp_json_encode( $colors );
	$style_formats            = array(
		array(
			'title'   => 'P-16',
			'inline'  => 'span',
			'classes' => 'P-16',
			'wrapper' => true,
		),
		array(
			'title'   => 'P-18',
			'inline'  => 'span',
			'classes' => 'P-18',
			'wrapper' => true,
		),
		array(
			'title'   => 'P-22',
			'inline'  => 'span',
			'classes' => 'P-22',
			'wrapper' => true,
		),
		array(
			'title'   => 'shadow-title',
			'inline'  => 'span',
			'classes' => 'title-shadow',
			'wrapper' => true,
		),
	);
	$options['style_formats'] = wp_json_encode( $style_formats );

	return $options;

}

add_filter( 'tiny_mce_before_init', 'dixeed_custom_color_tinymce' );

/* Hook to init */
add_action( 'init', 'dixeed_editor_background_color' );

/**
 * Add TinyMCE Button
 */
function dixeed_editor_background_color() {
	add_filter( 'mce_buttons_2', 'dixeed_editor_background_color_button', 1, 2 ); // 2nd row
}

/**
 * Modify 2nd Row in TinyMCE and Add Background Color After Text Color Option
 */
function dixeed_editor_background_color_button( $buttons, $id ) {
	/* Add the button/option after 4th item */
	array_splice( $buttons, 4, 0, 'backcolor' );
	array_unshift( $buttons, 'styleselect' );

	return $buttons;
}
