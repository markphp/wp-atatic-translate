<?php
if(isset($_POST) && $_POST!=NULL) {
	require realpath( __DIR__ ) . "/db_manager.php";

	//var_dump($_POST['ID']);

	$t_name="static_translate";
	$t_id=$_POST['ID'];

	$row = get_row($t_name,$t_id);
	//var_dump($row[0]);



	$form = '<div class="postbox"><div class="inside"><table cellpadding="8" class="tform_update"><tbody>';

	foreach($row[0] as $key => $item){
		$form .='<tr><td>'.$key.':</td><td><input type="text" name="'.$key.'" id="'.$key.'" value="'.$item.'" ';

		if($key == 'Serch_rule'){
			$form .='required ';
		}
		if($key == 'ID'){
			$form .= ' readonly ';
		}else {
			$form .= 'style="width:80%;">';
		}
		$form .='</td></tr>';
	}
	$form .= '<tr><td><input type="submit" name="send" class="button button-primary send" value="update"></td></tr></tbody></table></div></div>';
	

	echo $form;
}