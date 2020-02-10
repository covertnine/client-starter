<?php
/**
 *
 * Add fields and configure admin settings API.
 *
 * @since   1.0
 * @package c9
 */

require get_template_directory() . '/admin/class-wp-osa.php';

if ( class_exists( 'WP_OSA' ) ) {

	$wposa_obj = new WP_OSA();

	$wposa_obj->add_field(
		'cortex_branding',
		array(
			'id'   => 'dark-logo',
			'type' => 'image',
			'name' => __( 'Dark Theme Logo', 'c9' ),
			'desc' => __( 'Upload your dark color logo here', 'c9' ),
		)
	);
}
