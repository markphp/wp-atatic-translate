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
    $table .= '<th></th>';

    $table .= '</tr>
                </thead>';

    foreach (get_all($t_name) as $row => $value) {
        $table .= '<tr class="data_row ';
        if($row%2 == 1){
            $table .= 'row_bg';
        }
        $table .= '">';
        foreach ($value as $key => $data) {

            $table .= '<td>' . $data . '</td>';
        }
        $table .= '<td class="dell" id="" style="text-align: center;vertical-align: middle;color:red;font-weight: bold;">X</td>';

        $table .= '</tr>';
    }

    $table .= '</table>';

    $table .='<script>
(function( $ ) {
$(document).ready(function(){
	//get velue to change
	$(".data_row").dblclick(function(){

		var ID = $(this).find(":first-child").text();
        get_row(ID);
	});

	$(".dell").click(function(){
		var ID = $(".data_row").find(":first-child").text();
		//del_row(ID);
	});
});
})(jQuery);
</script>';


    echo $table;
}
