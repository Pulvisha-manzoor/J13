<?php 
function primecheck($num){
	for ($i=2; $i <= $num/2; $i++) { 
		if ($num % $i == 0) {
			return 0;
		}
		return 1;
	}
}
	$ans = primecheck(5);
	if ($ans == 0) {
	   echo "Not  Prime Number";
	}
	else{
		echo "Prime number";
	}
 ?>
