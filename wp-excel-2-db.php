<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              fb.com/hussam7ussien
 * @since             1.0.0
 * @package           Wp_Excel_2_Db
 *
 * @wordpress-plugin
 * Plugin Name:       WP Excel 2 DB
 * Plugin URI:        uri
 * Description:       Import excel sheet to wordpress database table form wordpress dashboard.
 * Version:           1.0.0
 * Author:            Hussam Hussien
 * Author URI:        fb.com/hussam7ussien
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-excel-2-db
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-excel-2-db-activator.php
 */
function activate_wp_excel_2_db() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-excel-2-db-activator.php';
	Wp_Excel_2_Db_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-excel-2-db-deactivator.php
 */
function deactivate_wp_excel_2_db() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-excel-2-db-deactivator.php';
	Wp_Excel_2_Db_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_excel_2_db' );
register_deactivation_hook( __FILE__, 'deactivate_wp_excel_2_db' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-excel-2-db.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_excel_2_db() {

	$plugin = new Wp_Excel_2_Db();
	$plugin->run();

}
run_wp_excel_2_db();
