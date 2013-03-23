<?php  // Funkcija ispituje ako je broj paran
	function parNepar($broj) {
		$a = $broj % 2; // MODULO "%". Rezultat formule je 0 ili 1. $broj je paran ukoliko je $a=0, a neparan ukoliko je $a=1 
		if ($a == 0) { 
			return true;
			}
		else {
			return false;
			}
		}
	echo parNepar(234267575);
?>