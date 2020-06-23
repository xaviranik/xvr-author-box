<?php
/**
 * @package  XVR
 */
/*
Plugin Name: XVR Author Box
Plugin URI: http://zabiranik.me
Description: Saving author information and displaying under posts.
Version: 1.0.0
Author: Zabir Anik
Author URI: http://zabiranik.me
License: GPLv2 or later
Text Domain: xvr-author-box
*/

defined( 'ABSPATH' ) or exit();

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_xvr_author_box() {
	XVR\Author_Box\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_xvr_author_box' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_xvr_author_box() {
	XVR\Author_Box\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_xvr_author_box' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'XVR\\Author_Box\\Init' ) ) {
	XVR\Author_Box\Init::register_services();
}