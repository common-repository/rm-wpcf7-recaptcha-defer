=== WPCF 7 reCaptcha Defer ===
Contributors: shiznitxxx, devsnit, rueschmedia
Donate link: https://devsnit.com
Tags: recaptcha, seo, optimization, speed
Requires at least: 3.0.1
Tested up to: 6.1.1
Stable tag: 1.0.3
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin will load Contact Form 7 reCaptcha on input focus, instead of loading it on page load.

== Description ==

This plugin is designed to help improve the performance of Contact Form 7 by loading the reCaptcha field on input focus instead of on page load. 
This can help reduce the number of requests made to the server and improve the overall performance of the form.

The main advantages of using this plugin:

* Defer loading of recaptcha until input is focused;
* Improve speed by loading recaptcha only when it's needed;
* Improve GDPR compliance by not loading recaptcha until it's needed;
* Reduces potential conflicts with other plugins that load recaptcha;
* Fewer HTTP requests needed to load recaptcha.


== Installation ==

* Method 1:
1. Go to your WP Dashboard > Plugins > Add new
2. Search for 'WPCF 7 reCaptcha Defer'
3. Click Install
4. Click Activate

* Method 2:
1. Download the plugin from this page
2. Upload `rm-wpcf7-recaptcha-defer` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Settings panel

== Changelog ==

= 1.0.3 =
* CF7 compatibility issue fixed. 

= 1.0.2 =
* Readme updated

= 1.0.1 =
* Fist security bug fixes

= 1.0.0 =
* Fist version
