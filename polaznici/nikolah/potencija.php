<?php
	$broj = 7;
	$potencija = 3;
	$rezultat=1;
	for ($i=1; $i<=$potencija; $i = $i + 1) {
		$rezultat = $rezultat*$broj;
		}
	echo $rezultat;
?>
<br><br>
<?php
//include ("header.php");
	$_broj = 8;
	$_potencija = 2;	
	// include ("funkcije.php")
;	echo "<b>Funkcije</b><br>";
	function potencija($_broj, $_potencija)   { //opcionalni argumenti - npr:  potencija($broj, $potencija=2) (opcionalni argumenti uvijek na kraju)  - "2" je ako nije odrađen 2. parametar
			$rezultat=1;
			for ($i=1; $i<=$potencija; $i = $i + 1) {
			$rezultat = $rezultat*$broj;
			}
			return $rezultat;
	}
	echo potencija($_broj, $_potencija);
//include ("footer.php");
?>

include - nastavlja s izvođenjem, ostatka programa iako poziva funkcije npr. nema
require - zaustavlja izvršenje programa ako nešto u funk. ne štima
include_once
require_once

scope - doseg funkcija