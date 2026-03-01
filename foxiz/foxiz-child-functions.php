<?php
/**
 * Foxiz Child Theme functions.php
 */

/**
 * Enqueue parent and child theme stylesheets
 */
function foxiz_child_enqueue_styles() {
	wp_enqueue_style(
		'foxiz-parent-style',
		get_template_directory_uri() . '/style.css'
	);
	wp_enqueue_style(
		'foxiz-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'foxiz-parent-style' ),
		'1.0.4'
	);
}
add_action( 'wp_enqueue_scripts', 'foxiz_child_enqueue_styles' );

/**
 * Enqueue Font Awesome 6.
 * Elementor loads FA4 (fa fa-icon syntax). Our posts use FA6 (fa-solid fa-icon).
 * FA4 and FA6 use different prefixes so they coexist without conflict.
 */
function whateverrun_enqueue_fontawesome() {
	wp_enqueue_style(
		'font-awesome-6',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
		array(),
		'6.5.2'
	);
}
add_action( 'wp_enqueue_scripts', 'whateverrun_enqueue_fontawesome' );