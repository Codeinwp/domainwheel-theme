<?php
/**
 * Theme functions.
 *
 * @package domainwheel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DW_VERSION', '2.0.0' );

/**
 * Load styles & scripts
*/
function neve_child_load_css() {
	wp_enqueue_style( 'dw-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style' ), NEVE_VERSION );
	// wp_dequeue_script( 'jquery' );
	// wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );
