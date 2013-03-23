<?php // 1.30. Funkcija faktorjel - računa n faktorjela
	//funkcija računa n faktorjela
	function faktorjel($n) {
		$faktorjel = 1;
		for ($i=1; $i<=$n; $i++) {
			$faktorjel = $faktorjel * $i;
			}
		return $faktorjel;
		}
?>