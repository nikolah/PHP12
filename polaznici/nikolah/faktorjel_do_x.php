<?php //računanje n faktorjela
	function fak($n) {
	$rez = 1;
	for ($i=1; $i<=$n; $i++) {
		$rez = $rez * $i;
		}
	return $rez;
	}
?>
<?php //računanje faktorjela za svaki broj do x pomoću funkcije fak()
		function faktorAll($x) {
		$br = "<br>";
		for ($i=1; $i<=$x; $i++) {
			echo $i, "! = ", fak($i);
			echo $br;
			}
		}
		faktorAll(9);
?>