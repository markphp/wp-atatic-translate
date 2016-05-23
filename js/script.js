(function( $ ) {
	$(document).ready(function(){
		get_all();

		$('.add_row').click(function(){
			$('#insert_form').fadeIn();
		});

		$('.add_changed').click(function(){
			$('#add_coll').fadeIn();
		});

		$('.dell').click(function(){

		});
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
			//alert('Update successful');
			jQuery('#update_form').fadeOut();
			//jQuery('#debug').html(data);
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
			//jQuery('#debug').html(data);
			//alert('Add successful');
			jQuery('#insert_form').fadeOut();
			get_all();

		},
		error:  function(xhr, str){
			alert("Error!");
		}
	});
}

function set_col(){ //Ajax
	var msg = jQuery("#add_coll").serialize();
	jQuery.ajax({
		type: "POST",
		url: '/wp-content/plugins/wp-static-translate/inc/set_coll.php',
		data: msg,
		success: function(data) {

			//alert('Add successful');
			jQuery('#add_coll').fadeOut();
			get_all();

		},
		error:  function(xhr, str){
			alert("Error!");
		}
	});
}

function get_row(id){ //Ajax
	var msg = {ID:id};
	//console.log(msg);
	jQuery.ajax({
		type: "POST",
		url: '/wp-content/plugins/wp-static-translate/inc/get_row.php',
		data: msg,
		success: function(data) {

			jQuery('#update_form').html(data).fadeIn();
			//alert(data);
			/*alert('Add successful');
			jQuery('#add_coll').fadeOut();
			get_all();*/

		},
		error:  function(xhr, str){
			alert("Error!");
		}
	});
}

function del_row(id){ //Ajax
	var msg = {ID:id};
	//console.log(msg);
	jQuery.ajax({
		type: "POST",
		url: '/wp-content/plugins/wp-static-translate/inc/del_row.php',
		data: msg,
		success: function(data) {

			jQuery('#debug').html(data);
			//alert(data);
			/*alert('Del successful');
			 */
			 get_all();

		},
		error:  function(xhr, str){
			alert("Error!");
		}
	});
}