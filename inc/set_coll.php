<?php
if(isset($_POST) && $_POST!=NULL) {
    require realpath(__DIR__) . "/db_manager.php";
//add_new_translate($t_name,$name)

    $t_name="static_translate";
    $name=$_POST['name'];

    //echo $t_name.$name;
    add_new_translate($t_name,$name);
}

