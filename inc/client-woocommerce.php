<?php

add_action('after_setup_theme', 'c9_add_woocommerce_support');
if (! function_exists('c9_add_woocommerce_support')) {

    function c9_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }
}

// $path defaults to 'woocommerce/' (in client folder)
add_filter(
    'woocommerce_template_path', function () {
        return 'client/woocommerce/';
    }
);
