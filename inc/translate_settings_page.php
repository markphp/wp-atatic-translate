<?php

function translate_settings_page(){
	global $mltlngg_current_language;
	global $t_name;

	$t_name = "static_translate";
?>
	<div class="wrap">
		<H1 class="title"><?php echo get_admin_page_title(); ?></H1>
		<h2>Here You can modiffer or add new static translation option.</h2>
	</div>
	<div class="edit_butt">
		<a href="" class="add_language">Add New language</a>
		<a href="" class="add_language">Add New translate</a>
	</div>
	<div class="translate_table"></div>
	<div class="forms_layout">
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
			<p><input type="text" name="ru_RU" id="ru_RU" value="" required/></p>

			<p><input type="submit" name="send" class="send" value="update"></p>
		</form>

		<form id="insert_form" method="post" action="javascript:void(0);" onsubmit="set_row()">
			<p>en_US:</p>
			<p><input type="text" name="en_US" id="en_US" value="" required/></p>
			<p>zh_HK:</p>
			<p><input type="text" name="zh_HK" id="zh_HK" value="" required/></p>

			<p><input type="submit" name="send" class="send" value="insert"></p>
		</form>

		<form id="add_coll" method="post" action="javascript:void(0);" onsubmit="set_col()">
			<p>Name:</p>
			<p><input type="text" name="name" class="name" value="" required/></p>

			<p><input type="submit" name="send" class="send" value="senden"></p>
		</form>

	</div>
<?php
}