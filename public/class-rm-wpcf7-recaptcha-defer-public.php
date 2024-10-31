<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://devsnit.com
 * @since      1.0.0
 *
 * @package    RM_WPCF7_RECAPTCHA_DEFER
 * @subpackage RM_WPCF7_RECAPTCHA_DEFER/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    RM_WPCF7_RECAPTCHA_DEFER
 * @subpackage RM_WPCF7_RECAPTCHA_DEFER/public
 * @author     Munteanu Alexandru <am@devsnit.com>
 */
class RM_WPCF7_RECAPTCHA_DEFER_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->rm_wpcf7_recaptcha_defer_options = get_option($this->plugin_name);

	}


	/**
	 * Register the RM_WPCF7_RECAPTCHA_DEFER LIB
	 *
	 * @since    1.0.0
	 */

	public function rm_wpcf7_recaptcha_dequee_cf7() {
		$plugin_enabled_state = $this->rm_wpcf7_recaptcha_defer_options['enable_wrd_function'];
		if($plugin_enabled_state) {
			if (version_compare(WPCF7_VERSION, '5.2') >= 0) {
				wp_dequeue_script('google-recaptcha');
				wp_dequeue_script('wpcf7-recaptcha');
			}
			else {
			    wp_dequeue_script('google-recaptcha');
			}
		}
	}	


	public function cf7_defer_recaptcha_js() {
		$plugin_enabled_state = $this->rm_wpcf7_recaptcha_defer_options['enable_wrd_function'];
		$plugin_site_key = $this->rm_wpcf7_recaptcha_defer_options['rm_wpcf7_recaptcha_defer_site_key'];
		if($plugin_enabled_state) {

			wp_enqueue_script('cf7recap', plugin_dir_url( __FILE__ ) . 'js/rm-wpcf7-recaptcha-defer-recaptcha.js', array('jquery'), '1.0');
			wp_localize_script( 'cf7recap',
				'wpcf7_recaptcha',
				array(
					'sitekey' => $plugin_site_key,
					'version' => WPCF7_VERSION,
					'actions' => apply_filters( 'wpcf7_recaptcha_actions', array(
						'homepage' => 'homepage',
						'contactform' => 'contactform',
					) ),
				)
			);
			
		}
	}


}
