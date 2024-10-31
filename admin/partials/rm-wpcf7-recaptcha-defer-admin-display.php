<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://devsnit.com
 * @since      1.0.0
 *
 * @package    RM_WPCF7_RECAPTCHA_DEFER
 * @subpackage RM_WPCF7_RECAPTCHA_DEFER/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	<form method="post" name="cleanup_options" action="options.php">

    <?php
        //Grab all options
        $options = get_option($this->plugin_name);

        // Cleanup
        $enable_wrd_function = $options['enable_wrd_function'];
        $rm_wpcf7_recaptcha_defer_site_key = $options['rm_wpcf7_recaptcha_defer_site_key'];

    ?>

    <?php
        settings_fields($this->plugin_name);
        do_settings_sections($this->plugin_name);
    ?>

	<hr>
    <fieldset>
        <h2><?php _e('Enable reCaptcha Defer', $this->plugin_name); ?></h2>
		<p><?php _e('By enabling this, the reCaptcha will be loaded when the user will click on an input field of your form!', $this->plugin_name); ?></p>
        <label for="<?php echo esc_attr($this->plugin_name); ?>-enable_wrd_function">
            <input type="checkbox" id="<?php echo esc_attr($this->plugin_name); ?>-enable_wrd_function" name="<?php echo esc_attr($this->plugin_name); ?>[enable_wrd_function]" value="1" <?php checked($enable_wrd_function,1); ?>/>
            <span><?php _e('Enable function', $this->plugin_name); ?></span>
        </label>
    </fieldset>	
	<hr>
    <fieldset>
        <h2><?php _e('reCaptcha V3 Site Key', $this->plugin_name); ?></h2>
        <p><?php _e('Add your reCaptcha site key here. If you do not have one, you can get one from', $this->plugin_name); ?> <a target="_blank" href="https://www.google.com/recaptcha/about/"><?php _e('here', $this->plugin_name); ?></a> </p>
        <input type="text" class="regular-text" id="<?php echo esc_attr($this->plugin_name); ?>-rm_wpcf7_recaptcha_defer_site_key" name="<?php echo esc_attr($this->plugin_name); ?>[rm_wpcf7_recaptcha_defer_site_key]" value="<?php if(!empty($rm_wpcf7_recaptcha_defer_site_key)) echo esc_attr($rm_wpcf7_recaptcha_defer_site_key); ?>"/>
    </fieldset>
        <?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>
	</form>

</div>