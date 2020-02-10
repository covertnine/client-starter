<?php
/**
 * Woocommerce specific functionality
 *
 * @package c9
 */
add_action( 'after_setup_theme', 'c9_add_woocommerce_support' );
if ( ! function_exists( 'c9_add_woocommerce_support')) {
	/**
	 * Enable support for WooCommerce
	 */
	function c9_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
	}
}

// $path defaults to 'woocommerce/' (in client folder)
add_filter('woocommerce_template_path', function () {
    return 'client/woocommerce/';
});


// change woocommerce thumbnail image size
add_filter('woocommerce_get_image_size_gallery_thumbnail', 'c9_override_woocommerce_image_size_gallery_thumbnail');
function c9_override_woocommerce_image_size_gallery_thumbnail($size)
{
    // Gallery thumbnails: proportional, max width 200px
    return array(
        'width'  => 85,
        'height' => 85,
        'crop'   => 0,
    );
}



add_filter('woocommerce_gallery_thumbnail_size', function ($size) {
    return 'woocommerce_thumbnail';
});




/** * Change number of products that are displayed per page (shop page) */
add_filter('loop_shop_per_page', 'c9_loop_shop_per_page', 40);
function c9_loop_shop_per_page($cols) {

    // $cols contains the current number of products per page based on the value stored on Options -> Reading
    // Return the number of products you wanna show per page.
    $cols = 40;
    return $cols;
}
