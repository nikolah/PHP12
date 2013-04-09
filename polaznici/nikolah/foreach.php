<?php
	$cars = array(
		'Mustang',
		'Fiat',
		'Opel',
		'Mitsubishi',
		1 => 35
		);
	print_r ($cars) . "<br>";
	$prazni = '';
	foreach ($cars as $car) {
		$prazni = $prazni . $car . "<br>";
		// echo "<br>" . $car;
		}
	echo $prazni;
	
?>