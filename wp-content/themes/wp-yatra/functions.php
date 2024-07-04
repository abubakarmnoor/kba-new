<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP Yatra
 * @since 1.0.0
 */


function wp_yatra_styles() {

	wp_enqueue_style(
		'wp-yatra-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script( 
		'wp-yatra-custom-js', 
		get_template_directory_uri() . '/assets/js/custom.js', 
		array( 'jquery' ), 
		'20160412', 
		true 
	);

}
add_action( 'wp_enqueue_scripts', 'wp_yatra_styles' );


function wp_yatraregister_block_pattern_categories(){
    register_block_pattern_category(
        'wp-yatra',
        array( 'label' => __( 'WP Yatra Patterns', 'wp-yatra' ) )
    );

}
add_action('init', 'wp_yatraregister_block_pattern_categories');

require get_template_directory() . '/tgm-plugin/tgm-hook.php';

function example_callback( ) {
   global $wt_cart;
	$items = $wt_cart->getItems();

    return $items;
}
add_filter( 'wp_travel_booking_traveler_name', 'example_callback' );