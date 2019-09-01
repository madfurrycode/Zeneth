<?php

/**
 * This is one of Zeneths core files please do not edit or delete it.
 * if you wish to add custom stylesheets or javascript file please create
 * a child theme.
 *
 * @package Zeneth
 * @author Tristan Elliott
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 */

function zeneth_scripts()
{
	/**
	 * Zeneth core theme stylesheets enqueue.
	 * @since 1.0.0
	 */
	wp_enqueue_style( 'zeneth-style', get_stylesheet_uri() );
		/**
		 * Bootstrap Css framework.
		 */
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/dist/css/bootstrap.min.css', array(), '4.3.1', 'all' );
		wp_enqueue_style( 'bootstrap-grid-css', get_template_directory_uri() . '/assets/dist/css/bootstrap-grid.min.css', array(), '4.3.1', 'all' );
			/**
			 * Icons
			 * - Font Awesome 4
			 * - Font Awesome 5
			 * - Ion Icons
			 * - Line Awesome
			 */
			wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/dist/fonts/font-awesome.min.css', array(), '4.0.0', 'all' );
			wp_enqueue_style( 'font-awesome-5-css', get_template_directory_uri() . '/assets/dist/fonts/fontawesome-all.min.css', array(), '5.0.0', 'all' );
			wp_enqueue_style( 'ionicons-css', get_template_directory_uri() . '/assets/dist/fonts/ionicons.min.css', array(), '2.0.0', 'all' );
			wp_enqueue_style( 'line-awesome-css', get_template_directory_uri() . '/assets/dist/fonts/line-awesome.min.css', array(), '1.1.0', 'all' );

	/**
	 * Bootstrap Js
	 */
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/dist/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
	wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/assets/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '4.3.1', true );

}
add_action( 'wp_enqueue_scripts', 'zeneth_scripts' );
