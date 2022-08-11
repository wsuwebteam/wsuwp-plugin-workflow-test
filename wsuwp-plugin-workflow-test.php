<?php
/**
 * Plugin Name: WSUWP Plugin | Workflow Test
 * Plugin URI: https://github.com/wsuwebteam/wsuwp-plugin-workflow-test
 * Description: Describe the plugin
 * Version:    1.0.1
 * Requires PHP: 7.3
 * Author: Washington State University, Dan White
 * Author URI: https://web.wsu.edu/
 * Text Domain: wsuwp-plugin-workflow-test
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Initiate plugin
require_once __DIR__ . '/includes/plugin.php';
