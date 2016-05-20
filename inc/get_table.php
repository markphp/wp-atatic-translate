<?php

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

        $table .= '">';
        foreach ($value as $key => $data) {

            $table .= '<td>' . $data . '</td>';
        }
        $table .= '</tr>';
    }

    $table .= '</table>';

    $table .='<script>
(function( $ ) {
$(document).ready(function(){
	//get velue to change
	$(".data_row").dblclick(function(){

		$("#row_id").val($(this).find(":first-child").text());
		$("#en_US").val($(this).find(":first-child").next().text());
        $("#ru_RU").val($(this).find(":first-child").next().next().text());
	});
});
})(jQuery);
</script>';


    echo $table;
}
