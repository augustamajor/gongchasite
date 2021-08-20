<?php

/*
Template Name: FAQ
*/

//* Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'sp_enqueue_files' );
function sp_enqueue_files() {
	
	if ( is_page_template('faq.php'))
	wp_enqueue_script( 'faq-toggle', get_stylesheet_directory_uri() . '/js/faq.js', array( 'jquery' ), '1.0.0', true );

}

//* Add custom body class
add_filter( 'body_class', 'faq_body_class' );
function faq_body_class( $classes ) {
	
	$classes[] = 'frequently-asked-questions';
	return $classes;
	
}

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Run the Genesis loop
genesis();