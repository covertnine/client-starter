<?php

/**
 * C9 Client Setup
 *
 * @package c9-starter
 */

add_action('after_setup_theme', 'c9_client_setup');
if (!function_exists('c9_client_setup')) {

	/**
	 * Client setup, colors, post formats, block
	 */
	function c9_client_setup()
	{


		/**
		 * Editor color palette
		 */
		add_theme_support('editor-color-palette', array(
			array(
				'name' => 'primary',
				'color'    => '#000000',
				'slug' => 'color-primary',
			),
			array(
				'name' => 'secondary',
				'color' => '#333333',
				'slug'    => 'color-secondary',
			),
			array(
				'name' => 'success',
				'color' => '#21a77a',
				'slug'    => 'color-success',
			),
			array(
				'name' => 'info',
				'color'    => '#f7f7f9',
				'slug'    => 'color-info',
			),
			array(
				'name' => 'warning',
				'color'    => '#ec971f',
				'slug'    => 'color-warning',
			),
			array(
				'name' => 'danger',
				'color'    => '#843534',
				'slug'    => 'color-danger',
			),
			array(
				'name' => 'dark',
				'color'    => '#000000',
				'slug'    => 'color-dark',
			),
			array(
				'name' => 'light',
				'color'    => '#ffffff',
				'slug'    => 'color-light',
			),
		));

		/**
		 * Enable support for Post Formats
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery'
			)
		);
	}
}

/**
 * Registering block styles for specific Gutenberg Blocks
 */
register_block_style(
	'core/list',
	array(
		'name'         => 'light-text',
		'label'        => __('Light Color Text', 'c9-starter'),
	)
);

register_block_style(
	'core/list',
	array(
		'name'         => 'dark-text',
		'label'        => __('Dark Color Text', 'c9-starter'),
	)
);

/**
 * Registering block patterns category with core Gutenberg blocks
 */
add_action('init', 'c9starter_register_block_patterns_cat');
function c9starter_register_block_patterns_cat()
{
	if (class_exists('WP_Block_Patterns_Registry')) {
		register_block_pattern_category(
			'c9',
			array('label' => __('C9 All Patterns', 'c9-starter'))
		);
		register_block_pattern_category(
			'landingpage',
			array('label' => __('C9 Page + Post Templates', 'c9-starter'))
		);
		register_block_pattern_category(
			'video',
			array('label' => __('C9 Video', 'c9-starter'))
		);
		register_block_pattern_category(
			'audio',
			array('label' => __('C9 Audio', 'c9-starter'))
		);
	}
}
