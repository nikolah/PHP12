<?php
 //funkcija računa broj samoglasnika u stringu
 function samoglasnik($arg) {
	$brojSamoglasnika = 0;
		for ($i=0; $i<strlen($arg); $i++) {
			if ($arg[$i] == 'a' || $arg[$i] == 'e' || $arg[$i] == 'i' || $arg[$i] == 'o' || $arg[$i] == 'u') {
				$brojSamoglasnika = $brojSamoglasnika + 1;
			}
		}
?>