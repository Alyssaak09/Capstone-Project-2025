<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


/**
 * Load Astra Child custom CSS only on WooCommerce shop pages
 */
function astra_child_enqueue_shop_assets() {
    if ( is_shop() || is_product_category() || is_product_tag() || is_product_taxonomy() ) {

        // Shop CSS
        wp_enqueue_style(
            'astra-child-shop-css',
            get_stylesheet_directory_uri() . '/shop.css',
            array('astra-child-theme-css'),
            CHILD_THEME_ASTRA_CHILD_VERSION
        );

        // Shop JS
        wp_enqueue_script(
            'astra-child-shop-js',
            get_stylesheet_directory_uri() . '/shop-animations.js',
            array('jquery'),
            '1.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_shop_assets', 20);


