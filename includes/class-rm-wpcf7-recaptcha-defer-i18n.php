<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://devsnit.com
 * @since      1.0.0
 *
 * @package    RM_WPCF7_RECAPTCHA_DEFER
 * @subpackage RM_WPCF7_RECAPTCHA_DEFER/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    RM_WPCF7_RECAPTCHA_DEFER
 * @subpackage RM_WPCF7_RECAPTCHA_DEFER/includes
 * @author     Munteanu Alexandru <am@devsnit.com>
 */
class RM_WPCF7_RECAPTCHA_DEFER_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rm-wpcf7-recaptcha-defer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
