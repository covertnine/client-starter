<?php
/**
 * Client-specific scripts for frontend
 *
 * @package c9-starter
 */

if (! function_exists('client_scripts') ) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function client_scripts()
    {

        wp_enqueue_style('client-styles', get_template_directory_uri() . '/client/client-assets/dist/client.min.css', array( 'c9-styles' ));
        //some examples of extending scripts
        wp_enqueue_script('client-scripts', get_template_directory_uri() . '/client/client-assets/custom-client.js', array( 'jquery'), '', true);


    }
} // endif function_exists( 'client_scripts' ).
add_action('wp_enqueue_scripts', 'client_scripts', 20);
