<?php // 1.12. Funkcija ispituje (i ispisuje) ako je broj prost (nedjeljiv s ikojim borjem osim samim sobom i s 1)
	function prim($n){		
			for ($i=($n-1); $i>1; $i--) {
			$ostatak = $n % $i;
				if ($ostatak == 0) {
				// echo "False";
				return false;
				}
			}
			// echo "Truth ", $i;
			return true;
	}
?>