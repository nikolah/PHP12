<?php
//fibonaccijev niz
$z=0;
$i=1;
while ($i<=500) { 
	$z = $z + $i;
	$i = $i + $z;
	echo  $z . ', ' . $i . ', ';
}
?>