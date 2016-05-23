<?php
require ($_SERVER[DOCUMENT_ROOT].'/wp-load.php');

//add table
function create_table ($t_name){
	global $wpdb; 
	global $static_db_version;

    $table_name = $wpdb->prefix . $t_name;

    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name){
    	$sql = "CREATE TABLE " . $table_name . " (
    	  	ID mediumint(9) NOT NULL AUTO_INCREMENT,
    	  	Serch_rule tinytext NOT NULL,
    	    UNIQUE KEY id (id)
    	);";

    	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    	dbDelta($sql);

    	add_option("static_db_versio", $static_db_version);
    }
}

//add new column
function add_new_column($t_name,$name){
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

//get row
function get_row($t_name,$t_id){
	global $wpdb;
	$table_name = $wpdb->prefix . $t_name;

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){

		$query = "SELECT * FROM " . $table_name . " WHERE id =".$t_id;
//var_dump($query);
		return $wpdb->get_results($query);
	}
}

/**
 * get table colum name function
 * @param $t_name
 *
 * @return array
 */
function get_colums_name($t_name){
	global $wpdb;
	$table_name= $wpdb->prefix . $t_name;
	//var_dump($wpdb);

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){

		return ($wpdb->get_col("DESC " . $table_name, 0));
	}
}

/**
 * insert update function
 * @param $t_name
 * @param $t_ID
 * @param $data
 * @param $value
 * need change
 */
function update_row($t_name,$t_ID,$data){
	global $wpdb;
	$table_name= $wpdb->prefix . $t_name;

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){
		$query ="UPDATE  $table_name SET $data WHERE id = $t_ID";
		//var_dump($query);
		$wpdb->query($query);
	}
}

function add_row($t_name,$value){
	global $wpdb;
	$table_name= $wpdb->prefix . $t_name;

	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name){
		
		$wpdb->insert($table_name,array(
			'Serch_rule'=> $value[0]
		));

	}

}