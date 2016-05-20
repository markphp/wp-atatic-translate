<?php
if(isset($_POST) && $_POST!=NULL){
	require realpath(__DIR__) . "/db_manager.php";
//update_row($t_name,$t_ID,$data,$value)

	$t_name="static_translate";
	$t_ID=$_POST['row_id'];
	$data=['en_US','ru_RU'];
	$value=[$_POST['en_US'],$_POST['ru_RU']];


	update_row($t_name,$t_ID,$data,$value);
}
