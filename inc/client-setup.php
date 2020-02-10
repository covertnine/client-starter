<?php
/**
 * Color scheme, style variations for core blocks, and post formats setup
 *
 * @package c9
 */

// Registers a style variation for paragraph fonts
register_block_style(
    'core/paragraph',
    array(
        'name'         => 'input-serif',
        'label'        => __( 'Alternate Font' ),
    )
);

add_action( 'after_setup_theme', 'c9_client_setup' );
if ( ! function_exists( 'c9_client_setup' ) ) {
	/**
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	function c9_client_setup() {
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);
	}
}
