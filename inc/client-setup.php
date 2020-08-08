<?php
add_action('after_setup_theme', 'c9_client_setup');
if (! function_exists('c9_client_setup') ) {
    /**
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    function c9_client_setup()
    {
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
