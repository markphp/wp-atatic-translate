(function( $ ) {
	$(document).ready(function(){
		get_all();

	});
})(jQuery);

function get_all() { //Ajax
	var msg = jQuery("#form").serialize();
	jQuery.ajax({
		type: "POST",
		url: '/wp-content/plugins/wp-static-translate/inc/get_table.php',
		data: msg,
		success: function(data) {

			jQuery(".translate_table").html(data);

		},
		error:  function(xhr, str){
			alert("Error!");
		}
	});
}

function update() { //Ajax
	var msg = jQuery("#update_form").serialize();
	jQuery.ajax({
		type: "POST",
		url: '/wp-content/plugins/wp-static-translate/inc/update_table.php',
		data: msg,
		success: function(data) {

			//alert(data);
			get_all();
		},
		error:  function(xhr, str){
			alert("Error!");
		}
	});
}

function set_row() { //Ajax
	var msg = jQuery("#insert_form").serialize();
	jQuery.ajax({
		type: "POST",
		url: '/wp-content/plugins/wp-static-translate/inc/set_row.php',
		data: msg,
		success: function(data) {

			get_all();

		},
		error:  function(xhr, str){
			alert("Error!");
		}
	});
}