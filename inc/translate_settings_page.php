<?php

function translate_settings_page(){
	global $mltlngg_current_language;
	global $mltlngg_languages;

	//var_dump($mltlngg_languages);
	global $t_name;

	$t_name = "static_translate";
?>
	<div class="wrap">
		<H1 class="title"><?php echo get_admin_page_title(); ?></H1>
		<h2>Here You can modiffer or add new static translation option.</h2>
	</div>
	<div class="edit_butt">

		<a href="javascript:void(0);" class="add_row" title="Press to add new row with search rule.">Add new serch rule</a>
		<a href="javascript:void(0);" class="add_changed" title="Press to add new Column with change type.">Add new replace</a>

	</div>
	<div class="translate_table"></div>
	<div class="forms_layout">
		<form id="form" method="post" action="javascript:void(0);" onsubmit="get_all()" style="display: none;">
			<p>Name:</p>
			<p><input type="text" name="name" class="name" value="static_translate" required/></p>

			<p><input type="submit" name="send" class="send" value="senden"></p>
		</form>

		<form id="update_form" method="post" action="javascript:void(0);" onsubmit="update()" style="display: none;">

		</form>

		<form id="insert_form" method="post" action="javascript:void(0);" onsubmit="set_row()" style="display: none;">
			<div><span>Serch_rule:</span>
			<input type="text" name="Serch_rule" id="Serch_rule" value="" required style="width: 85%;"/>

			<input type="submit" name="send" class="send" value="insert"></div>
		</form>

		<form id="add_coll" method="post" action="javascript:void(0);" onsubmit="set_col()" style="display: none;">
			<p>
				<span>Name:</span>

				<select name="selected">
					<?php
						foreach($mltlngg_languages as $name){
							echo '<option value="'.$name[1].'">'.$name[1].' - '.$name[2].'</option>';
						}
					?>
				</select>
			</p>
			<p><input type="submit" name="send" class="send" value="senden"></p>
		</form>

	</div>
	<div id="debug"></div>
<?php
}