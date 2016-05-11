<?php

/**
 * Fired during plugin activation
 *
 * @link       http://slushman.com
 * @since      1.0.0
 *
 * @package    Formidable_No_Webmails
 * @subpackage Formidable_No_Webmails/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Formidable_No_Webmails
 * @subpackage Formidable_No_Webmails/includes
 * @author     Slushman <chris@slushman.com>
 */
class Formidable_No_Webmails_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		if ( ! is_plugin_active( 'formidable/formidable.php' ) ) {

			exit( 'Please activate Formidable first!' );

		}

	}

}
