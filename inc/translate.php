<?php
/*
* Apply find and replace rules
*/


function far_ob_call( $buffer ) { // $buffer contains entire page

global $mltlngg_current_language;

	$far_settings = get_all("static_translate");

	$temp=[];

	$tet = $buffer;

	$buffer = preg_replace_callback("/(&#[0-9]+;)/", function($m) { return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES"); }, $buffer);

	foreach( $far_settings as $row ) {
		
			foreach ($row as $key => $value) {
				$temp[$key] = $value;				
			}
			
			$buffer = str_replace('{{'.$temp['en_US'].'}}', $temp[$mltlngg_current_language], $buffer );	
			
	}

	return $buffer;
}

function template_redirect() {
	//echo "string";
	ob_start( 'far_ob_call' );
}
//Handles find and replace for public pages
add_action( 'template_redirect', 'template_redirect' );