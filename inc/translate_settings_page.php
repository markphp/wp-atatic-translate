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
	<div class="translate_table"></div>

	<form id="form" method="post" action="javascript:void(0);" onsubmit="get_all()">
		<p>Name:</p>
		<p><input type="text" name="name" class="name" value="static_translate" required/></p>

		<p><input type="submit" name="send" class="send" value="senden"></p>
	</form>

	<form id="update_form" method="post" action="javascript:void(0);" onsubmit="update()">
		<p>Name:</p>
		<p><input type="text" name="name" class="name" value="static_translate" required/></p>

		<p><input type="submit" name="send" class="send" value="senden"></p>
	</form>
	
<?php
}