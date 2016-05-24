<?php
if(isset($_POST) && $_POST!=NULL) {
    require realpath(__DIR__) . "/db_manager.php";
//add_new_translate($t_name,$name)

    //var_dump($_POST['selected']);
    $t_name="static_translate";
    $name=$_POST['selected'];

    //echo $t_name.$name;
    add_new_column($t_name,$name);
}

