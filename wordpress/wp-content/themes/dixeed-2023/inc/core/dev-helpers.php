<?php


/*--------------------------------------------------------------
# Theme Config file setup
--------------------------------------------------------------*/
// search and remove comments like /* */ and //
//$json       = preg_replace( "#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t]//.*)|(^//.*)#", '', $json );
$ign_config = json_decode( file_get_contents( get_theme_file_path( 'theme.config.json' ) ), true );


/**
 * @param $item
 * @param bool $default
 *
 * @return bool|mixed
 */
function ign_get_config( $item, $default = false ) {
	global $ign_config;
	if ( isset( $ign_config[ $item ] ) && $ign_config[$item] ) {
		return $ign_config[ $item ];
	} else {
		return $default;
	}
}


/*--------------------------------------------------------------
# Development Work and Helpers
--------------------------------------------------------------*/
/**
 * Add to the wp log for development and debugging. You can also send the log to the web console.
 * To use, you must have the following defined in your wp_config file.
 * define('WP_DEBUG', true);
 * define('WP_DEBUG_LOG', true);
 */
if ( ! function_exists( 'write_log' ) ) {
	function write_log( $log, $send_to_console = false ) {
		if ( true === WP_DEBUG ) {
			if ( is_array( $log ) || is_object( $log ) ) {
				error_log( print_r( $log, true ) );
			} else {
				error_log( $log );
			}

			if ( $send_to_console ) {
				debug_to_console( $log );
			}
		}
	}
}

/**
 * Send debug code to the Javascript console!
 * Will only work if the page loads fully without an error that stops wp_footer from outputting.
 */
$console_log = '';
if ( ! function_exists( 'debug_to_console' ) ) {
	function debug_to_console( $data ) {
		if ( is_array( $data ) || is_object( $data ) ) {
			$log = "<script>console.table(" . json_encode( $data ) . ");</script>";
		} else {
			$log = "<script>console.log('PHP: $data');</script>";
		}
		global $console_log;
		$console_log .= $log;
	}
}

/*
* Output the error in the footer and send to console
*/
function output_log_to_footer() {
	global $console_log;
	echo $console_log;
}

add_action( 'wp_footer', 'output_log_to_footer' );
add_action( 'admin_footer', 'output_log_to_footer' );


/*--------------------------------------------------------------
# Adding more php files
--------------------------------------------------------------*/

/**
 * @param $dir
 * Gets all php files from the directory and sub directory that start with an underscore _
 * @param int $depth
 */
function ign_require_all( $dir, $depth = 2 ) {
	if ( file_exists( $dir ) ) {
		foreach ( array_diff( scandir( $dir ), array( '.', '..' ) ) as $filename ) {
			//check if its a file
			if ( is_file( $dir . '/' . $filename ) ) {
				//only include automatically if it starts with an underscore
				if ( substr( $filename, 0, 1 ) === '_' && strpos( $filename, '.php' ) !== false ) {
					require_once( $dir . '/' . $filename );
				}

			} else {
				//if its not a file its a directory. Look through it for more underscore php partial files
				if ( $depth > 0 ) {
					ign_require_all( $dir . '/' . $filename, $depth - 1 );
				}
			}
		}
	}
}

//always include the main parent themes inc files
ign_require_all( locate_template( '/inc' ) );


//get themes folders. child themes can override
ign_require_all( locate_template( '/src/post-types' ) );
ign_require_all( locate_template( '/src/blocks' ) );


/**
 * Handles JavaScript detection.
 * Adds a script that adds `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Ignition 1.0
 */
function dixeed_2023_javascript_detection() {
	echo "<script type='text/javascript'>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
	echo "<script type='text/javascript'>var  isIE11 = !!window.MSInputMethodContext && !!document.documentMode;</script>";
}

add_action( 'wp_head', 'dixeed_2023_javascript_detection', 0 );
add_action( 'admin_head', 'dixeed_2023_javascript_detection', 0 );


/**
 * admin_bar_color_dev_site function.
 * So you can tell if your working on dev site or staging site by checking if admin bar is blue or not. Blue means staging
 * @access public
 * @return void
 */

function admin_bar_color_dev_site() {

	if ( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', "::1" ) ) ) {
		echo '<style>
	body #wpadminbar{ background:' . ign_get_config( 'dev_admin_bar_color', '#156288' ) . '; }
</style>';
	}
}

add_action( 'wp_head', 'admin_bar_color_dev_site' );
add_action( 'admin_head', 'admin_bar_color_dev_site' );


// Remove default image sizes here. medium-large is probably not needed.
//in the admin you can set media sizes to 0 to remove them and save disk space.
function remove_default_images( $sizes ) {
	unset( $sizes['medium_large'] ); // 768px

	return $sizes;
}
