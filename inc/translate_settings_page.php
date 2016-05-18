<?php

function translate_settings_page(){
?>
	<div class="wrap">
		<H1 class="title"><?php echo get_admin_page_title(); ?></H1>
		<h2>Here You can modiffer or add new static translation option.</h2>
	</div>
	<div class="translate_table">
		<table width="100%">
			<thead class="thead">
				<tr>
					<?php
						foreach(get_colums_name("static_translate") as $colum){
							echo '<th>'.$colum.'</th>';
						}
					?>
				</tr>
			</thead>
			<?php 
			//var_dump(get_all("static_translate"));

			foreach (get_all("static_translate") as $row => $value) {
				echo '<tr class="data_row ';
				if($row%2 != 0){
					echo 'row_bg';
				}
				echo '">';
				foreach ($value as $key => $data) {

					echo '<td>'.$data.'</td>';
				}
				echo '</tr>';
			}  
			?>
		</table>
	</div>
	

	
<?php
}