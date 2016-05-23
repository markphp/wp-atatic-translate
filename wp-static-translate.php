<?php
/*
Plugin Name: WP Static Translate
Plugin URI: https://github.com/markphp/wp-static-translate
Description: A simple and easy way to translate your text for all the static pages in WordPress. A great development tool!
Author: Mark
Author URI: mark.org.ua
Version: 1.0.0
Text Domain: wp-static-translate
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
global $mltlngg_current_language;
$static_db_version = "1.0";

/*
*install function
*/
function static_install (){
	create_table ("static_translate");
}
register_activation_hook(__FILE__,'static_install');

/*
*add js and css files for admin
*/
function for_admin_enqueue() {
	if(get_admin_page_title() == 'WP static translate'){
	    wp_enqueue_style( 'static_translate', plugin_dir_url( __FILE__ ) . 'css/style.css', false, '1.0.0' );

	    wp_enqueue_script( 'jquery', plugin_dir_url( __FILE__ ) . 'js/jquery.js', array( 'jquery' ),'1.0.0' );
	    wp_enqueue_script( 'static_translate_script', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ),'1.0.0' );
	}
}
add_action( 'admin_enqueue_scripts', 'for_admin_enqueue' );

/*
*add js and css files for front
*/
function for_front_enqueue(){
	wp_enqueue_script( 'translate_script', plugin_dir_url( __FILE__ ) . 'js/translate.js', array( 'jquery' ),'1.0.0' );
}
add_action('get_footer','for_front_enqueue');

/*
*add core files
*/
require_once realpath(__DIR__) . "/inc/db_manager.php";
require_once realpath(__DIR__) . "/inc/translate_settings_page.php";
require_once realpath(__DIR__) . "/inc/translate.php";
//require_once realpath(__DIR__) . "/inc/get_table.php";

/*
*register menu button
*/
if ( ! function_exists( 'static_translate_admin_menu' ) ) {
	function static_translate_admin_menu() {
		$settings = add_menu_page( 'WP static translate', 'WP static translate', 'manage_options', "translate_settings", 'translate_settings_page' );
	}
}
add_action( 'admin_menu', 'static_translate_admin_menu' );





function manage_options(){
	
}

function translate_settings(){
	
}

