<?php 
for($i=1; $i<=100; $i++) {
	$zarez_ilTocka = ", ";
	if ($i == 100) {
		$zarez_ilTocka = ".";
		}
	else if ($i == 99) {
		$zarez_ilTocka = " i ";
	}
	echo $i, $zarez_ilTocka;
}
?>