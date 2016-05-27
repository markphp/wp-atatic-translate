<?php
if(isset($_POST['search'])) {
	require realpath(__DIR__) . "/db_manager.php";

	$t_name = "static_translate";
	$search = $_POST['search'];

	//var_dump(search_by($t_name,$search));
	/**
	 * start create table:
	 */
	$table .= '<table width="100%" class="wp-list-table widefat striped pages">

                    <thead class="thead">
                        <tr>';
	foreach (get_colums_name($t_name) as $key => $colum) {

		$table .= '<th>' . $colum;
		if($key != 'ID' && $key != 1){
			$table .=' <span class="dashicons dashicons-trash delet_col" title="Remove column"></span>';
		}
		$table .= '</th>';

		if($key == 'ID') {
			$table .= '<th></th>';
		}

	}
	$table .= '</tr>
                    </thead>';

	$table .= '<tbody>';
	foreach (search_by($t_name,$search) as $row => $value) {

		$table .= '<tr class="data_row ';

		if($row%2 == 1){

			$table .= 'row_bg';

		}

		$table .= '">';

		foreach ($value as $key => $data) {

			$table .= '<td>' . $data . '</td>';

			if($key == 'ID'){
				$table .= '<td  style="text-align:center;vertical-align: middle;font-weight: bold;">
                                            <span class="dell dashicons dashicons-trash" title="Remove the row!"></span>
                                            <span class="edit dashicons dashicons-edit" title="Edit row"></span>
                                       </td>';
			}
		}

		$table .= '</tr>';

	}

	$table .= '</tbody>';

	$table .= '<tfoot class="tfoot">
                        <tr>';
	foreach (get_colums_name($t_name) as $key => $colum) {
		$table .= '<th>' . $colum;
		if($key != 'ID' && $key != 1){
			$table .=' <span class="dashicons dashicons-trash delet_col" title="Remove column"></span>';
		}
		$table .= '</th>';
		if($key == 'ID') {
			$table .= '<th></th>';
		}
	}
	$table .= '</tr>
                </tfoot>';

	$table .= '</table>';
	/**
	 * end creat table
	 */

	/**
	 * start add the action script
	 */
	$table .='<script>

        (function( $ ) {$(document).ready(function(){

            var t_name = $("#form .table_name").val();

            $(".data_row").dblclick(function(){

                var ID = $(this).find(":first-child").text();

                get_row(ID,t_name);

            });

            $(".edit").click(function(){

                var ID = $(this).parent().prev().text();

                get_row(ID,t_name);

            });

            $(".dell").click(function(){

                var ID = $(this).parent().prev().text();

                del_row(ID,t_name);

            });

            $(".delet_col").click(function(){
                var c_name = $(this).parent().text();

                del_col(t_name,c_name);
            });
        });})(jQuery);

    </script>';
	/**
	 * end add script
	 */

	print_r($table);

}