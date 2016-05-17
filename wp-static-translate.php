<?php
/*
Plugin Name: WP static translate
Plugin URI: https://github.com/markphp/wp-static-translate
Description: A simple and easy way to translate your text for all the static pages in WordPress. A great development tool!
Author: Mark
Author URI: mark.org.ua
Version: 0.1.0
Text Domain: wp-static-translate
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

$static_db_version = "1.0";

function static_install (){
	global $wpdb; 
	global $static_db_version;

    $table_name = $wpdb->prefix . "static_translate";

    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name){
    	$sql = "CREATE TABLE " . $table_name . " (
    	  	id mediumint(9) NOT NULL AUTO_INCREMENT,
    	  	en_US tinytext NOT NULL,
    	    UNIQUE KEY id (id)
    	);";

    	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    	dbDelta($sql);

    	add_option("static_db_versio", $static_db_versio);
    }
}
register_activation_hook(__FILE__,'static_install');