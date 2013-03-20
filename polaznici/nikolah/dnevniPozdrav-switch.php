<?php // Dnevni pozdrav - switch
	echo "<b>Dnevni pozdrav 6</b><br>";
	$sat = date("H");
	$minuta = date("i");
	$sekunda = date("s");
	$datum = date("d");
	$mjesec = date("M");
	$godina = date("Y");
	$dan_uGodini = date("z");
	echo "Datum: ", $datum, "<br>";
	echo "Mjesec: ", $mjesec, "<br>";
	echo "Godina: ", $godina, "<br>";
	echo "Sati: ", $sat, "<br>";
	echo "Minuta: ", $minuta, "<br>";
	echo "Sekunde: ", $sekunda, "<br>";
	echo "Dan u godini: ", $dan_uGodini, "<br>";
	switch ($sat) {
		case (0 || $sat >= 1 && $sat <= 5):
		$pozdrav = "Spavanje..";
		break;
			
		case($sat > 5 && $sat <= 9):
		$pozdrav = "Jutro.....";
		break;
		
		case($sat > 9 && $sat <= 17):
		$pozdrav = "DobarDan!";
		break;
		
		case($sat > 17 && $sat <= 21):
		$pozdrav = "Dobra večer!";
		break;
		
		case($sat > 21 && $sat <= 24):
		$pozdrav = "Laku noć";
		break;
		
		case($sat < 0 || $sat > 24):
		$pozdrav = "Nemoguće! Pogrešno vrijeme..";
		break;
		default:
		}
	echo $pozdrav;
?>