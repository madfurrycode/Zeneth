<?php
/**
 * Zeneth functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zeneth
 */

/**
 * Zeneth Core
 * @since 1.0.0
 */
require get_template_directory() . '/inc/zeneth-core/zeneth-setup.php';
require get_template_directory() . '/inc/zeneth-core/zeneth-enqueue.php';
require get_template_directory() . '/inc/zeneth-core/zeneth-widgets.php';

/**
 * Custom theme templates
 * @since 1.0.0
 */
require get_template_directory() . '/inc/custom/custom-header.php';

/**
 * Customizer for the WP_Customizer
 * @since 1.0.0
 */
require get_template_directory() . '/inc/Api/customizer/customizer.php';

/**
 * Plugin compatibility functions
 * @since 1.0.0
 */
// require get_template_directory() . '/inc/plugins/jetpack.php';
// require get_template_directory() . '/inc/plugins/woocommerce.php';
