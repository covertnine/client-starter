<?php
//functions for client specifics

/****************************************************************************************/
/***************************** load client scripts for frontend styling
/****************************************************************************************/
/**
 * Client-specific functionality
 *
 * @package c9
 */

if ( ! function_exists( 'client_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function client_scripts() {

		wp_enqueue_style( 'client-styles', get_template_directory_uri() . '/client/client-assets/dist/client.min.css', array( 'c9-styles' ) );
		wp_enqueue_script( 'client-scripts', get_template_directory_uri() . '/client/client-assets/custom-client.js', array( 'jquery' ), true );

		//some examples of extending scripts
		//wp_enqueue_script( 'smooth-state', get_template_directory_uri() . '/client/client-assets/vendor/jquery.smoothState.min.js', array( 'jquery' ), true );
		//wp_enqueue_style( 'c9-megamenu', get_template_directory_uri() . '/client/client-assets/vendor/megamenu.css', array( 'c9-styles' ) );

	}
} // endif function_exists( 'client_scripts' ).
add_action( 'wp_enqueue_scripts', 'client_scripts', 20 );

if ( ! function_exists( 'c9_client_editor_style' ) ) {
	/**
	 * Add client compiled files to gutenberg editor.
	 */
	function c9_client_editor_style() {
		wp_enqueue_style( 'c9-client-styles', get_template_directory_uri() . '/client/client-assets/dist/client.min.css' );
		wp_enqueue_style( 'c9-client-editor-styles', get_template_directory_uri() . '/client/client-assets/dist/client-editor.min.css' );
	}
	add_action( 'enqueue_block_editor_assets', 'c9_client_editor_style', 99999999 );
} //end if function exists


/****************************************************************************************/
/******** Sets up colors and post types and custom styles for core blocks
/****************************************************************************************/
include("client-setup.php");

/****************************************************************************************/
/* C9 Work Admin Settings */
/****************************************************************************************/
require_once( 'admin-settings.php' );


/****************************************************************************************/
/* Adding filter to look for client folder templates before child theme templates
/****************************************************************************************/

add_filter( 'template_include', function( $template ) {
  $path = explode('/', $template );
  $template_chosen = end( $path );
  $grandchild_template = get_template_directory() . '/client/' . $template_chosen;
  if ( file_exists( $grandchild_template  ) ) {
     	$template = $grandchild_template;
  }
  return $template;
}, 99);

/****************************************************************************************/




// Example of extending functionality to navigation from client folder
// add_filter( 'nav_menu_link_attributes', 'c9_add_smooth_class', 10, 4 );
// if ( ! function_exists( 'c9_add_smooth_class' ) ) {
// 	/**
// 	 * Add c9-smooth class to menu items
// 	 */
// 	function c9_add_smooth_class( $atts ) {

// 			$atts['class'] .= ' c9-smooth';

// 			return $atts;
// 	}
// }
