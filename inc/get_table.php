<?php
//require ($_SERVER[DOCUMENT_ROOT].'/wp-load.php');
if(isset($_POST['name']) && $_POST['name']!="") {
require realpath(__DIR__) . "/db_manager.php";

    $t_name = $_POST['name'];
    $table = '';

    $table .= '<table width="100%">
                <thead class="thead">
                    <tr>';

    foreach (get_colums_name($t_name) as $colum) {
        $table .= '<th>' . $colum . '</th>';
    }

    $table .= '</tr>
                </thead>';

    foreach (get_all($t_name) as $row => $value) {
        $table .= '<tr class="data_row ';
        if ($row % 2 != 0) {
            $table .= 'row_bg';
        }
        $table .= '">';
        foreach ($value as $key => $data) {

            $table .= '<td>' . $data . '</td>';
        }
        $table .= '</tr>';
    }

    $table .= '</table>';

    echo $table;
}
