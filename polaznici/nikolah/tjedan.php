<?php
	echo "<b>Funkcija vraća dan u tjednu</b><br>";
	function dan($dan) {
		switch($dan) {
			case(1):
			$imeDana = "Ponedjeljak";
			break;
			case(2):
			$imeDana = "Utorak";
			break;
			case(3):
			$imeDana = "Srijeda";
			break;
			case(4):
			$imeDana = "Četvrtak";
			break;
			case(5):
			$imeDana = "Petak";
			break;
			case(6):
			$imeDana = "Subota";
			break;
			case(7):
			$imeDana = "Nedjelja";
			break;
			default:
			}
		return $imeDana;
		}
	echo dan(4);
?>