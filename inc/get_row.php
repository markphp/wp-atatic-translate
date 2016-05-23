<?php
if(isset($_POST) && $_POST!=NULL) {
	require realpath( __DIR__ ) . "/db_manager.php";

	//var_dump($_POST['ID']);

	$t_name="static_translate";
	$t_id=$_POST['ID'];

	$row = get_row($t_name,$t_id);
	//var_dump($row[0]);



	$form = '';

	foreach($row[0] as $key => $item){
		$form .='<p><span>'.$key.':</span></p><p><input type="text" name="'.$key.'" id="'.$key.'" value="'.$item.'" ';

		if($key == 'Serch_rule'){
			$form .='required ';
		}
		if($key == 'ID'){
			$form .= ' readonly ';
		}else {
			$form .= 'style="width:80%;">';
		}
		$form .='</p>';
	}
	$form .= '<p><input type="submit" name="send" class="send" value="update"></p>';

	echo $form;
}