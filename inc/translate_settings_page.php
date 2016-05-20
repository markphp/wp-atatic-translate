<?php

function translate_settings_page(){
	global $mltlngg_current_language;

?>
	<div class="wrap">
		<H1 class="title"><?php echo get_admin_page_title(); ?></H1>
		<h2>Here You can modiffer or add new static translation option.</h2>
	</div>
	<a href="" class="add_language">Add New language</a>
	<a href="" class="add_language">Add New translate</a>
	<div class="translate_table">

		<table width="100%">
			<thead class="thead">
			<tr>

				<th></th>

			</tr>
			</thead>

			<tr class="data_row">
				<td></td>

			</tr>


		</table>

	</div>

	<form id="form" method="post" action="javascript:void(0);" onsubmit="get_all()">
		<p>Name:</p>
		<p><input type="text" name="name" class="name" value="static_translate" required/></p>

		<p><input type="submit" name="send" class="send" value="senden"></p>
	</form>

	<form id="update_form" method="post" action="javascript:void(0);" onsubmit="update()">
		<p>ID:</p><input name="row_id" id="row_id">
		<p>en_US:</p>
		<p><input type="text" name="en_US" id="en_US" value="" required/></p>
		<p>zh_HK:</p>
		<p><input type="text" name="zh_HK" id="zh_HK" value="" required/></p>

		<p><input type="submit" name="send" class="send" value="update"></p>
	</form>

	<form id="insert_form" method="post" action="javascript:void(0);" onsubmit="set_row()">
		<p>en_US:</p>
		<p><input type="text" name="en_US" id="en_US" value="" required/></p>
		<p>zh_HK:</p>
		<p><input type="text" name="zh_HK" id="zh_HK" value="" required/></p>

		<p><input type="submit" name="send" class="send" value="update"></p>
	</form>

<?php
}