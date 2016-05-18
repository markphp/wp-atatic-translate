<?php
//add table
function create_table ($t_name){
	global $wpdb; 
	global $static_db_version;

    $table_name = $wpdb->prefix . $t_name;

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
//add new language
function add_new_translate($t_name,$name){
	global $wpdb;
	$table_name = $wpdb->prefix . $t_name;

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){

    	$wpdb->query("ALTER TABLE " . $table_name . " ADD COLUMN ".$name. " tinytext");
    }    
}

//select all data
function get_all($t_name){
	global $wpdb;
	$table_name = $wpdb->prefix . $t_name;

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){

		$query = "SELECT * FROM " . $table_name;

    	return $wpdb->get_results($query);
    }  
}


//get table colum name
function get_colums_name($t_name){
	global $wpdb;
	$table_name = $wpdb->prefix . $t_name;

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){

		return ($wpdb->get_col("DESC " . $table_name, 0));
	}
}