<?php
	echo "<b>Funkcija vraća dan u mjesecu</b><br>";
	function mjesec($mjesec) {
		switch($mjesec) {
			case(1):
			$imeMjeseca = "Siječanj";
			break;
			case(2):
			$imeMjeseca = "Veljača";
			break;
			case(3):
			$imeMjeseca = "Ožujak";
			break;
			case(4):
			$imeMjeseca = "Travanj";
			break;
			case(5):
			$imeMjeseca = "Svibanj";
			break;
			case(6):
			$imeMjeseca = "Lipanj";
			break;
			case(7):
			$imeMjeseca = "Srpanj";
			break;
			case(3):
			$imeMjeseca = "Kolovoz";
			break;
			case(4):
			$imeMjeseca = "Rujan";
			break;
			case(5):
			$imeMjeseca = "Listopad";
			break;
			case(6):
			$imeMjeseca = "Studeni";
			break;
			case(7):
			$imeMjeseca = "Prosinac";
			break;
			default:
			}
		return $imeMjeseca;
		}
?>