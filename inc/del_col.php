<?php
/**
 * action to del column
 */
if(isset($_POST) && $_POST!=NULL) {
	require realpath(__DIR__) . "/db_manager.php";

	$t_name = $_POST['t_name'];

	$c_name = $_POST['c_name'];

	del_col($t_name,$c_name);
}