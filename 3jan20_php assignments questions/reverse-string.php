<?php
$str = 'ABCDE';
$strRvrs = '';
$length = strlen($str);
for ($i=$length-1; $i >= 0; $i--) { 
	$strRvrs .=$str[$i];
}
echo $strRvrs;
 ?>