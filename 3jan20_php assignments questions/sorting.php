<?php
$cars = array("Saman", "Mehnaz", "Qurat","Pulvisha");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>