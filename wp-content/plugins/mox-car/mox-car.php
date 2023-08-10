<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://gpeterson@moxcar.com
 * @since             1.0.0
 * @package           Mox_Car
 *
 * @wordpress-plugin
 * Plugin Name:       Mox Car Communications
 * Plugin URI:        https://moxcar.com
 * Description:       This plugin is for Mox Car Communications Website
 * Version:           1.0.0
 * Author:            Gino Peterson
 * Author URI:        https://gpeterson@moxcar.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mox-car
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MOX_CAR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mox-car-activator.php
 */
function activate_mox_car() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mox-car-activator.php';
	Mox_Car_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mox-car-deactivator.php
 */
function deactivate_mox_car() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mox-car-deactivator.php';
	Mox_Car_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mox_car' );
register_deactivation_hook( __FILE__, 'deactivate_mox_car' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mox-car.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mox_car() {

	$plugin = new Mox_Car();
	$plugin->run();

}
run_mox_car();
