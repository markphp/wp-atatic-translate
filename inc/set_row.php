<?php
if(isset($_POST) && $_POST!=NULL) {
	require realpath( __DIR__ ) . "/db_manager.php";

//function add_row($t_name,$value)

	$t_name="static_translate";
	$value=[$_POST['Serch_rule']];
	$value = preg_replace_callback("/(&#[0-9]+;)/", function($m) { return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES"); },$value);
	$value = str_replace("\\",'',$value);
	//var_dump($value);
	add_row($t_name,$value);
}