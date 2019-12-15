<?php
/**
 * Plugin Name: MyPlugin
 * Description: MyPlugin Description.
 * Text Domain: myplugin
 * Version: 1.0.0
 * Plugin URI: https://www.github.com/kadimi/starter
 * GitHub Plugin URI: https://github.com/kadimi/starter
 * Author: Nabil Kadimi
 * Author URI: https://kadimi.com
 *
 * @package MyPlugin
 */

/**
 * Composer autoload.
 */
require 'vendor/autoload.php';

/**
 * The plugin class.
 */
require 'class-myplugin.php';

/**
 * Helper function.
 */
function myplugin() {
	return MyPlugin::get_instance();
}

/**
 * Fire plugin.
 */
myplugin();
