<?php
if(isset($_POST) && $_POST!=NULL){
	require realpath(__DIR__) . "/db_manager.php";
//update_row($t_name,$t_ID,$data,$value)

	$t_name="static_translate";
	$t_ID=$_POST['row_id'];
	$data=['en_US','zh_HK'];
	$value=[$_POST['en_US'],$_POST['zh_HK']];


	update_row($t_name,$t_ID,$data,$value);
}
