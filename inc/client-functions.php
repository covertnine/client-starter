<?php
//functions for client specifics

/****************************************************************************************/
/***************************** remove admin bar
/****************************************************************************************/
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

/****************************************************************************************/
/***************************** load client scripts for frontend styling
/****************************************************************************************/


if (!function_exists('c9_client_scripts')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function c9_client_scripts()
    {
        wp_enqueue_style('c9-client-styles', get_stylesheet_directory_uri() . '/client/client-assets/dist/client.min.css', array('c9-styles'));
        wp_enqueue_style('c9-client-styles', get_stylesheet_directory_uri() . '/client/client-assets/dist/client-editor.min.css', 99999999);

        wp_enqueue_script('smooth-state', get_template_directory_uri() . '/client/client-assets/vendor/jquery.smoothState.min.js', array('jquery'), true);

        wp_enqueue_script('c9-client-scripts', get_template_directory_uri() . '/client/client-assets/custom-client.js', array('jquery', 'smooth-state'), true);
        //wp_enqueue_style('c9-megamenu', get_stylesheet_directory_uri() . '/client/client-assets/vendor/megamenu.css', array('c9-styles'));
    }
} // endif function_exists( 'client_scripts' ).
add_action('wp_enqueue_scripts', 'c9-client_scripts', 2);

/* add client compiled files to gutenberg editor */
if (!function_exists('c9_client_editor_style')) {
    function c9_client_editor_style()
    {
        wp_enqueue_style('c9-client-typekit-style', '//use.typekit.net/uqa4rne.css');
        wp_enqueue_style('c9-client-styles', get_stylesheet_directory_uri() . '/client/client-assets/dist/client.css');
        wp_enqueue_style('c9-client-editor-styles', get_stylesheet_directory_uri() . '/client/client-assets/dist/client-editor.css');
    }
    add_action('enqueue_block_editor_assets', 'c9_client_editor_style', 99999999);
} //end if function exists


add_action('after_setup_theme', 'c9_client_setup');


if (!function_exists('c9_client_setup')) {

    function c9_client_setup()
    {
        /*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));
    }
}
