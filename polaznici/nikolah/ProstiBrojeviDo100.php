<?php // 1.13. Ispis prostih brojeva od 1-100, uz pomoć funkcije "prim()" iz 1.12.
	//for ($x = 23; $x > 0; $x--) {
	for ($x = 1; $x < 100; $x++) {
		$ispis = prim($x);
			if ($ispis == true) { //može i if(prim($x)) 
			echo $x, ", ";
			}
		}
?>