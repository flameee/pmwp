<?php 
/**
 * Plugin Name: PMWP - Pimp My WordPress
 * Description: Add the power to enable or disable some code snippets without the needs to write a single line of code
 * Version: 1.0.0
 * Author: Flame
 * Author URI: http://pixelfoundry.studio
 * Text Domain: pmwp
*/

/**
 * First security layer. Can't access directly to the plugin file
 */
if ( !defined( 'ABSPATH' ) ) { exit; }
function pmwp_plugin_activate() {
  /**
   * Check if the option is set
   */
  $pmwp_active_check = get_option('pmwp_plugin_option');
  if ($pmwp_active_check){
    add_option('pmwp_plugin_option', 'pmwp_is_active');
  } else {
    update_option('pmwp_plugin_option', "pmwp_is_active");  
  }
  
}

register_activation_hook(__FILE__, 'pmwp_plugin_activate');

function pmwp_plugin_deactivate() {
  update_option('pmwp_plugin_option', "pmpw_is_disabled");
}

register_deactivation_hook(__FILE__, 'my_plugin_deactivate');