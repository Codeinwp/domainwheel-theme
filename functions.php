<?php
/**
 * Theme functions.
 *
 * @package domainwheel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DW_VERSION', '2.0.3' );

/**
 * Load styles & scripts
*/
function neve_child_load_css() {
	wp_dequeue_style( 'neve-google-font-headings' );
	wp_dequeue_style( 'neve-google-font-body' );
	wp_enqueue_style( 'dw-google-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap', array(), false );
	wp_enqueue_style( 'dw-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style' ), DW_VERSION );
	// wp_dequeue_script( 'jquery' );
	// wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );

/**
 * Add proper schema.org
 */
function namegenerator_add_schema_json( $data ) {
	echo '
	<script type="application/ld+json">
	{
    	"@context": "http://schema.org",
    	"@type": "Organization",
    	"name": "VertiStudio",
    	"url": "http://vertistudio.com/",
    	"logo":	"http://vertistudio.com/wp-content/uploads/2018/07/VertiStudio_logo1.png",
    	"vatID": "RO29109287",
    	"email": "friends@themeisle.com",
    	"legalName": "Vertigo Studio SRL",
    	"foundingDate":	"2012",
    	"foundingLocation": {
    		"name": "Bucharest"
    	},
    	"numberOfEmployees": {
    		"value": 25
    	},
    	"address": {
    		"streetAddress": "20 Povernei Street, 4th Floor, Flat no. 9",
    		"addressLocality": "Bucharest",
    		"addressRegion": "Bucharest",
    		"postalCode": "010641",
    		"addressCountry": {
    			"name": "Romania"
    		}
    	},
    	"founder": {
    		"name": "Ionut Neagu"
    	},
    	"brand": {
    		"@type": "Brand",
    		"name": "DomainWheel",  
    		"url": "https://domainwheel.com",
    		"logo": "' . get_template_directory_uri() . '/img/logo_dw.jpg"
    	}
	}
    </script>';
}
add_action( 'wp_footer', 'namegenerator_add_schema_json' );
