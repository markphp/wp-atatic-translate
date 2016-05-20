(function( $ ) {
	$(document).ready(function(){

		//get velue to change
		$('.data_row').dblclick(function(){

			//alert($('.thead tr').find(':first-child').text() + $(this).find(':first-child').text());

		})
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

			alert(data);

		},
		error:  function(xhr, str){
			alert("Error!");
		}
	});
}