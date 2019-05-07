<?php

/*
*
* Plugin Name: Shortcode Learning
* Plugin URI: https://jsadang.wordpress.com/
* Description: Learning ground for WordPress shortcode.
* Author: Jack Henry Sadang
* Author URI: https://jsadang.wordpress.com/
* Version: 1.0.0
*
*/


function bartag_func( $atts ){
	$a = shortcode_atts( array(
		'foo' => include_once plugin_dir_path(__FILE__). '/views/shortcode-template.php'
	), $atts);
}
add_shortcode( 'bartag', 'bartag_func' );


function plugin_assets(){
	
	wp_enqueue_style( 'bootstrap', plugins_url(). '/before-and-after/assets/css/bootstrap.css', '' );
	wp_enqueue_style( "cocoen-style", plugins_url()."/before-and-after/assets/css/cocoen.min.css", "" );

	wp_enqueue_script( "image-inputs-script", plugins_url()."/before-and-after/assets/js/image-inputs.js", "", true );
	wp_enqueue_script( "cocoen-script", plugins_url()."/before-and-after/assets/js/cocoen.min.js", "", true );
	wp_enqueue_script( "cocoen-jquery", plugins_url()."/before-and-after/assets/js/cocoen-jquery.min.js", "", true );

}
add_action("init", "plugin_assets");