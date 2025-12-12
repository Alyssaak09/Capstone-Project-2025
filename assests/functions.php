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
function astra_child_shop_only_styles() {

    // Load child theme CSS again ONLY for shop pages (safe + optimized)
    if ( is_shop() || is_product_category() || is_product_tag() || is_product_taxonomy() ) {

        wp_enqueue_style(
            'astra-child-shop-css',
            get_stylesheet_directory_uri() . '/style.css',
            array('astra-child-theme-css'), // depends on your main child stylesheet
            CHILD_THEME_ASTRA_CHILD_VERSION
        );
    }
}
add_action( 'wp_enqueue_scripts', 'astra_child_shop_only_styles', 25 );
