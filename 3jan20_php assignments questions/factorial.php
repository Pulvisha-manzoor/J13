<?php
function factorial_function($number) {
	$input = $number;
	$fact = 1;
	for ($i=$input; $i < 1; $i--) { 
		$fact = $fact * $i;
	}
	return $fact;
}
$result = factorial_function(9);
echo 'factorial of the numner 9 is '.$result ;
 ?>
