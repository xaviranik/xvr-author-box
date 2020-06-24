<?php
/**
 * @package  XVR
 */
/*
Plugin Name: XVR Author Box
Plugin URI: http://zabiranik.me
Description: Saving author information and displaying under posts.
Version: 1.0.1
Author: Zabir Anik
Author URI: http://zabiranik.me
License: GPLv2 or later
Text Domain: xvr-author-box
*/

defined( 'ABSPATH' ) or exit();
const version = '1.0.1';

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
	define_constants();
	XVR\Author_Box\Init::register_services();
}

/**
 * Defines plugin related constants
 * @return void
 */
function define_constants() {
    define( 'XVR_AUTHOR_BOX_VERSION', version );
    define( 'XVR_AUTHOR_BOX_PLUGIN_NAME', 'xvr-author-box' );
    define( 'XVR_AUTHOR_BOX_FILE', __FILE__ );
    define( 'XVR_AUTHOR_BOX_PATH', __DIR__ );
    define( 'XVR_AUTHOR_BOX_URL', plugins_url( '', XVR_AUTHOR_BOX_FILE ) );
    define( 'XVR_AUTHOR_BOX_ASSETS', XVR_AUTHOR_BOX_URL . '/assets' );
}