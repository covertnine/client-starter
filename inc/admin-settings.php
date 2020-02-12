<?php
/**
 *
 * Add fields and configure admin settings API.
 *
 * @since   1.0
 * @package c9
 */

require_once get_template_directory() . '/admin/class-wp-osa.php';

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


/**
 * Sets up meta for page navigation switch
 */
function c9_page_header_switch() {
	add_meta_box(
		'page_header_switch',           // Unique ID
		'Header Navigation Text Color',  // Box title
		'c9_page_header_switch_html',  // Content callback, must be of type callable
		'page',               // Post type
		'side'
	);
}
add_action( 'add_meta_boxes', 'c9_page_header_switch' );

/**
 * Content callback for post header size.
 */
function c9_page_header_switch_html( $post ) {
	$value = isset( get_post_meta( $post->ID, 'c9_page_header_switch', true )['c9_page_header_switch'] ) ? get_post_meta( $post->ID, 'c9_page_header_switch', true )['c9_page_header_switch'] : 'white';
	?>
	<label for="c9_page_header_switch">Header Switch</label>
	<div>
		<input type="radio" id="black" name="c9_page_header_switch" value="black" <?php echo 'black' === $value ? 'checked' : ''; ?>>
		<label for="black">Black Text</label>
	</div>
	<div>
		<input type="radio" id="white" name="c9_page_header_switch" value="white" <?php echo 'white' === $value ? 'checked' : ''; ?>>
		<label for="white">White Text</label>
	</div>
<?php
}

/**
 * Update post meta.
 */
function c9_save_header_switch( $post_id ) {
	if ( array_key_exists( 'c9_page_header_switch', $_POST ) ) {
		$unslashed = wp_unslash( $_POST );
		update_post_meta(
			$post_id,
			'c9_page_header_switch',
			$unslashed
		);
	}
}
add_action( 'save_post', 'c9_save_header_switch' );
