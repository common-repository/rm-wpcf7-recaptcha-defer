<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://devsnit.com
 * @since             1.0.3
 * @package           RM_WPCF7_RECAPTCHA_DEFER
 *
 * @wordpress-plugin
 * Plugin Name:       WPCF 7 reCaptcha Defer
 * Description:       This plugins is a Contact Form 7 addon which will enable reCaptcha load on input focus/click. This will reduce the page loading time and some GDPR problems.
 * Version:           1.0.3
 * Author:            Ruesch.Tech
 * Author URI:        https://ruesch.tech
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rm-wpcf7-recaptcha-defer
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
define( 'RM_WPCF7_RECAPTCHA_DEFER_PLUGIN_NAME_VERSION', '1.0.3' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rm-wpcf7-recaptcha-defer-activator.php
 */
function activate_RM_WPCF7_RECAPTCHA_DEFER() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rm-wpcf7-recaptcha-defer-activator.php';
	RM_WPCF7_RECAPTCHA_DEFER_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rm-wpcf7-recaptcha-defer-deactivator.php
 */
function deactivate_RM_WPCF7_RECAPTCHA_DEFER() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rm-wpcf7-recaptcha-defer-deactivator.php';
	RM_WPCF7_RECAPTCHA_DEFER_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_RM_WPCF7_RECAPTCHA_DEFER' );
register_deactivation_hook( __FILE__, 'deactivate_RM_WPCF7_RECAPTCHA_DEFER' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rm-wpcf7-recaptcha-defer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_RM_WPCF7_RECAPTCHA_DEFER() {

	$plugin = new RM_WPCF7_RECAPTCHA_DEFER();
	$plugin->run();

}
run_RM_WPCF7_RECAPTCHA_DEFER();
