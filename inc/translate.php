<?php
/*
* Apply find and replace rules
*/
function far_ob_call( $buffer ) { // $buffer contains entire page

	$far_settings = get_all("static_translate");

	$temp=[];

	$tet = "Hong Kong’s one-stop platform for beauty booking and pampering!";

		foreach( $far_settings as $row ) {
			$i=0;
				foreach ($row as $value) {
					$temp[$i] = $value;
					$i++;
				}

				$a.=$temp[1].$temp[2];

				//$t  = stristr($buffer,$temp[1]);
				//str_replace( $temp[1], $temp[2], $tet );	
				//$buffer.=$temp[1].$temp[2];		
				//$a = str_replace( (string)$temp[1], (string)$temp[2], $tet );
				$buffer = str_replace( $temp[1], $temp[2], $tet );
				$tet.='--------'.$temp[1][9].'--------'.$tet[9];
		}
	//$a = str_replace( "Hong Kong’s one-stop platform for beauty booking and pampering!", " ", $tet );

	return $buffer;
}

function template_redirect() {
	//echo "string";
	ob_start( 'far_ob_call' );
}
//Handles find and replace for public pages
add_action( 'template_redirect', 'template_redirect' );