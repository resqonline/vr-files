<?php
/**
 * Plugin Name: VR Uploads
 * Plugin URI: https://www.resqonline.eu/wordpress/wp-plugins/vr-uploads/
 * Description: Panorama images zip upload 
 * Version: 1.1
 * Author: resQ online
 * Author URI: https://www.resqonline.eu
 * Text Domain: vr-files
 */
if(!defined('ABSPATH')) {
  die('You are not allowed to call this page directly.');
}

define( 'VR_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
 
require VR_PLUGIN_DIR_PATH . 'vr_attachmentbox.php';

define( 'VR_PLUGIN_FILE', __FILE__ );
 
register_activation_hook( VR_PLUGIN_FILE, 'vr_activation' );

function vr_activation(){
	// make something happen
}
?>