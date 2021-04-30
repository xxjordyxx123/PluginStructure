<?php

/**
 * @package PuglinStrucuture
 */
/*
Plugin Name: PuglinStrucuture
Description: las estructura de un plugin.
Version: 0.1.0
Contributors: ebani
Author: Jordy Sebastian Castaño Holguin
Author URI: https://github.com/xxjordyxx123/PluginStructure.git
License: GPLv2 or later
License URI: 
Text Domain: PuglinStrucuture
Domain Path: 
*/


// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
 
// Requiere once the Composer Autoload
//if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
//	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
//}


/**
 * The code that runs during plugin activation
 */
function activate_woocommerce_siigo_api_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_woocommerce_siigo_api_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_woocommerce_siigo_api_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_siigo_api_plugin' );


// Initializes all the Core classes of the plugin
if ( class_exists( 'Inc\\Init') ) {
	Inc\Init::register_services();
}