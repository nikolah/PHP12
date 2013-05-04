<?php
//fibonaccijev niz - self made
$z=0;
$i=1;
$n=500;
while ($i<=$n) { 
	$z = $z + $i;
	$i = $i + $z;
	echo  $z . ', ' . $i . ', ';
}
?>