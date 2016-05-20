<?php
if(isset($_POST) && $_POST!=NULL) {
	require realpath( __DIR__ ) . "/db_manager.php";
//function add_row($t_name,$value)

	$t_name="static_translate";
	$value=[$_POST['en_US'],$_POST['zh_HK']];

	add_row($t_name,$value);
}