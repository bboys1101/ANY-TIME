<?php
	
	$http = "http://www.taiwanrate.org/exchange_rate.php?c=JPY";
	$buffer = file($http);
	$array1 = array("銀行", "價格");
	$flag_start1 = false;

	// echo $buffer;
	for( $i=0; $i<count($buffer); $i++){

		$start1 = strpos($buffer[$i],'accounts');

		echo $start1."\n"; 
		// if($start1 !== false && $flag_start1 === false){
		//  	$flag_start1 = true;
		// }

		// if($flag_start1){
			
		// }
	}


?>