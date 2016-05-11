<?php

/**
 * @link              http://slushman.com
 * @since             1.0.0
 * @package           Formidable_No_Webmails
 *
 * @wordpress-plugin
 * Plugin Name:       Formidable No Webmails
 * Plugin URI:        http://slushman.com/formidable-no-webmails
 * Description:       Filters submitted emails and returns errors if they are from a free webmail service.
 * Version:           1.0.0
 * Author:            Slushman
 * Author URI:        http://slushman.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       formidable-no-webmails
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in classes/class-activator.php
 */
function activate_formidable_no_webmails() {
	require_once plugin_dir_path( __FILE__ ) . 'classes/class-activator.php';
	Formidable_No_Webmails_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in classes/class-deactivator.php
 */
function deactivate_formidable_no_webmails() {
	require_once plugin_dir_path( __FILE__ ) . 'classes/class-deactivator.php';
	Formidable_No_Webmails_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_formidable_no_webmails' );
register_deactivation_hook( __FILE__, 'deactivate_formidable_no_webmails' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'classes/class-formidable-no-webmails.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_formidable_no_webmails() {

	$plugin = new Formidable_No_Webmails();
	$plugin->run();

}
run_formidable_no_webmails();

function showme( $show ) {

	echo '<pre>';
	print_r( $show );
	echo '</pre>';

}
