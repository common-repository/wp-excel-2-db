<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       fb.com/hussam7ussien
 * @since      1.0.0
 *
 * @package    Wp_Excel_2_Db
 * @subpackage Wp_Excel_2_Db/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Excel_2_Db
 * @subpackage Wp_Excel_2_Db/includes
 * @author     Hussam Hussien <hussam7ussien@it-qan.com>
 */
class Wp_Excel_2_Db_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-excel-2-db',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
