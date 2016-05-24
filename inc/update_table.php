<?php
if(isset($_POST) && $_POST!=NULL){
	require realpath(__DIR__) . "/db_manager.php";
//update_row($t_name,$t_ID,$data,$value)

	//var_dump($_POST);

	$t_name="static_translate";
	$t_ID=$_POST['ID'];

	//$query ="UPDATE  $table_name SET `$data[0]` = '$value[0]',`$data[1]` = '$value[1]' WHERE id = $t_ID";
	$data='';
	$i = 0;
	//echo count($_POST);
	foreach($_POST as $key => $value){
		$data .='`'.$key.'` = "'.$value.'"';
		if($i != count($_POST)-1){
			$data .=',';
		}
			$i++;
	}
	//var_dump($data);

	/*$data=['en_US','ru_RU'];
	$value=[$_POST['en_US'],$_POST['ru_RU']];*/


	update_row($t_name,$t_ID,$data);
}
