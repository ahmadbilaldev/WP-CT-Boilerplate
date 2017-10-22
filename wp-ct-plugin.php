<?php

/**
* @link              https://github.com/mrahmadbilal
* @since             1.0.0
* @package           WP_Ct_Plugin
* @wordpress-plugin
* Plugin Name:       WP CT Plugin.
* Plugin URI:        https://github.com/mrahmadbilal/WP-CT-Boilerplate
* Description:       This is a WordPress Custom Taxonomy Plugin boilerplate. It makes creating custom taxonomies very easy and saves a lot of time. It is also properly documented to make it easier for you to customize it as per your needs.
* Version:           1.0.0
* Author:            mrahmadbilal
* Author URI:        https://github.com/mrahmadbilal
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

//  If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WP_CT_PLUGIN_VERSION', '1.0.0' );

/**
* Registers the Custom Taxonomy hook.
* @since 1.0.0
* @uses add_action()
*/

add_action( 'init' ,'create_new_taxonomy');

/**
* Includes the file containing custom taxonomy code.
* @since 1.0.0
* @uses require_once()
*/

require_once(dirname(__FILE__).'/wp-includes/ct.php');

/**
 * The code that runs during plugin activation.
 * Uses activaiton hook.
 */

function wp_ct_activation() {
 
  	// Write the activation code here.
}

register_activation_hook( __FILE__ , 'wp_ct_activation');

/**
 * The code that runs during plugin deactivation.
 * Uses deactivaiton hook.
 */

function wp_ct_deactivation() {
 
  	// Write the deactivation code here.
}

register_deactivation_hook( __FILE__ , 'wp_ct_deactivation');