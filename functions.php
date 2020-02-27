<?php
/**
 * Theme functions.
 *
 * @package domainwheel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DW_VERSION', '2.0.5' );

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
 * Add adsense code on results page
 */
function namegenerator_add_adsense() {
	if ( is_page_template( 'page-results.php' ) ) {
		echo '<script data-ad-client="ca-pub-5203918029229367" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
	}
}
add_action( 'wp_head', 'namegenerator_add_adsense' );

/**
 * CPT for premium domains
 */
function namegenerator_premium_domains_cpt() {
	register_post_type(
		'premium-domains',
		array(
			'labels'              => array(
				'name'          => __( 'Premium Domains', 'namegenerator' ),
				'singular_name' => __( 'Premium Domain', 'namegenerator' ),
			),
			'public'              => true,
			'hierarchical'        => false,
			'menu_icon'           => 'dashicons-admin-site-alt3',
			'has_archive'         => false,
			'publicly_queryable'  => true,
			'exclude_from_search' => true,
			'menu_position'       => 3,
			'show_in_rest'        => true,
			'supports'            => array( 'title', 'custom-fields', 'thumbnail' ),
		)
	);
}
add_action( 'init', 'namegenerator_premium_domains_cpt' );

/**
 * Add [domainwheel_premium_domains] SCD
 */
function namegenerator_premium_domains_shortcode( $atts ) {
	$atts = shortcode_atts(
				array(
					'limit' => 8,
				),
				$atts,
				'domainwheel_premium_domains'
			);

	$output = '<div class="domainwheel_premium_domains_wrapper">';

	$premium_domains_query_args = array(
		'post_type'      => 'premium-domains',
		'post_status'    => 'publish',
		'posts_per_page' => (int) $atts['limit'],
		'orderby'        => 'rand',
	);
		
	$premium_domains_query = new WP_Query( $premium_domains_query_args );
	if ( $premium_domains_query->have_posts() ) {
		while ( $premium_domains_query->have_posts() ) {
			$premium_domains_query->the_post(); 
			
			$domain_logo_path = get_stylesheet_directory_uri() . '/assets/img/premium-domains-placeholder.png';
			if ( has_post_thumbnail() ) {
				$domain_logo_path = get_the_post_thumbnail_url( get_the_ID(), 'full' );
			}

			$domain_buy_link = 'https://dan.com/buy-domain/' . get_the_title();
			if ( get_field( 'premium_domain_custom_link' ) ) {
				$domain_buy_link = get_field( 'premium_domain_custom_link' );
			}

			$output .= '<div class="premium-domain">
							<img src="' . $domain_logo_path . '">
							<p>' . get_the_title() . '</p>
							<a class="dan-premium-link" href="' . $domain_buy_link . '" target="_blank" rel="nofollow noopener">
								Register Now $' . get_field( 'premium_domain_price' ) . '
							</a>
						</div>';
		} 
	} 
	wp_reset_query();

	$output .= '</div>';

	return $output;
}
add_shortcode( 'domainwheel_premium_domains', 'namegenerator_premium_domains_shortcode' );

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
