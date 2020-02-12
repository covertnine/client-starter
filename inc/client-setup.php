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

// Registers a style variation for paragraph fonts
register_block_style(
    'core/paragraph',
    array(
        'name'         => 'light-font',
        'label'        => __( 'Light Font' ),
    )
);

// Registers a style variation for arrow buttons
register_block_style(
    'core/button',
    array(
        'name'         => 'white-arrow',
        'label'        => __( 'White Arrow' ),
    )
);

// Registers a style variation for arrow buttons
register_block_style(
    'core/button',
    array(
        'name'         => 'dark-arrow',
        'label'        => __( 'Black Arrow' ),
    )
);

// Registers a style variation for buttons
register_block_style(
    'core/button',
    array(
        'name'         => 'btn-lg',
        'label'        => __( 'Large' ),
    )
);

// Registers a style variation for buttons
register_block_style(
    'core/button',
    array(
        'name'         => 'btn-sm',
        'label'        => __( 'Small' ),
    )
);

// Registers a style variation for home 4 boxes
register_block_style(
    'c9-blocks/column-container',
    array(
        'name'         => 'quick-links',
        'label'        => __( 'Quick Links' ),
    )
);

// Registers a style variation for home news
register_block_style(
    'c9-blocks/post-grid',
    array(
        'name'         => 'boxed-news',
        'label'        => __( 'Boxed News' ),
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
