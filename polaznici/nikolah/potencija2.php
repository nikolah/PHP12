<?php // Računanje potencije pomoću petlje
	function potencija($broj, $pot) {
		$rez = 1;
		for($i=1; $i<=$pot; $i++) {
			$rez = $rez * $broj;
			}
		return $rez;
		}
	echo potencija(3, 2);
?>