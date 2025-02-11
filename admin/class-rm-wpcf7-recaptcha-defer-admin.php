<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://devsnit.com
 * @since      1.0.0
 *
 * @package    RM_WPCF7_RECAPTCHA_DEFER
 * @subpackage RM_WPCF7_RECAPTCHA_DEFER/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    RM_WPCF7_RECAPTCHA_DEFER
 * @subpackage RM_WPCF7_RECAPTCHA_DEFER/admin
 * @author     Munteanu Alexandru <am@devsnit.com>
 */
class RM_WPCF7_RECAPTCHA_DEFER_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in RM_WPCF7_RECAPTCHA_DEFER_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The RM_WPCF7_RECAPTCHA_DEFER_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rm-wpcf7-recaptcha-defer-admin.css', array(), $this->version, 'all' );
		
		
		// Color Picker Style
		if ( 'settings_page_rm-wpcf7-recaptcha-defer' == get_current_screen() -> id ) {
            // CSS stylesheet for Color Picker
            // wp_enqueue_style( 'wp-color-picker' );            
            // wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-cbf-admin.css', array( 'wp-color-picker' ), $this->version, 'all' );
         }
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in RM_WPCF7_RECAPTCHA_DEFER_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The RM_WPCF7_RECAPTCHA_DEFER_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		
		//Color Picker Scripts
		if ( 'settings_page_rm-wpcf7-recaptcha-defer' == get_current_screen() -> id ) {
            // wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rm-wpcf7-recaptcha-defer-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );  
			// wp_enqueue_code_editor( array( 'type' => 'text/html' ) );
            // wp_enqueue_script( 'wp-code-editor', plugin_dir_url( __FILE__ ) . 'js/rm-wpcf7-recaptcha-defer-code-editor.js', array( 'jquery'), '', true );        
        }
	}
	/**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 *
	 * @since    1.0.0
	 */

	public function add_plugin_admin_menu() {

		/*
		 * Add a settings page for this plugin to the Settings menu.
		 *
		 * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
		 *
		 *        Administration Menus: http://codex.wordpress.org/Administration_Menus
		 *
		 */
		add_options_page( 'RM Contact Form 7 Defer - Settings', 'WPCF7 reCaptcha Defer', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
		);
	}

	 /**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */

	public function add_action_links( $links ) {
		/*
		*  Documentation : https://codex.wordpress.org/Plugin_API/Filter_Reference/plugin_action_links_(plugin_file_name)
		*/
	   $settings_link = array(
		'<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
	   );
	   return array_merge(  $settings_link, $links );

	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */

	public function display_plugin_setup_page() {
		include_once( 'partials/rm-wpcf7-recaptcha-defer-admin-display.php' );
	}
	
	
	/**
	*
	* Admin Section Settings Register/Save setting 
	*
	**/
	 public function options_update() {
		register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));
	 }
	 
	 
	/**
	*
	* Validating and Sanitazing Admin Section Fields
	*
	**/
	public function validate($input) {
		// All checkboxes inputs        
		$valid = array();

		//Cleanup
		$valid['enable_wrd_function'] = (isset($input['enable_wrd_function']) && !empty($input['enable_wrd_function'])) ? 1 : 0;
		$valid['rm_wpcf7_recaptcha_defer_site_key'] = (isset($input['rm_wpcf7_recaptcha_defer_site_key']) && !empty($input['rm_wpcf7_recaptcha_defer_site_key'])) ? sanitize_text_field($input['rm_wpcf7_recaptcha_defer_site_key']) : '';
		
		return $valid;
	 }
	
}
