<?php
/*
Plugin Name: WP Swift: Hide Admin Bar
Plugin URI: 
Description: Disable WordPress Admin Bar for all users except Administrators and Editors
Version: 1.0.0
Author: Gary Swift
Author URI: 
Text Domain: wordpress-plugin-hide-admin-bar
Domain Path: 
*/
class Hide_Admin_Bar_Plugin {
    /*
     * Initialize the plugin.
     */
    public function __construct() {
        add_action('after_setup_theme', array( $this, 'remove_admin_bar') );
    }
    /*
     * Hide the admin bar
     */
	function remove_admin_bar() {
		if (!current_user_can('editor') && !is_admin()) {
			show_admin_bar(false);  
		}
	}
}
// Initialize the plugin
$hide_admin_bar_plugin = new Hide_Admin_Bar_Plugin();