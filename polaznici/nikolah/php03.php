g<?php
	$godine=19;
	if ($godine>18) {
	echo "Ispi�i me!";
	}
	else if ($godine>26 && $godine<28) {
	"Ostajem uz pla�anje";
	}
	else {
	echo "Ostajem";
	}	
?>
<br>
<br>
<?php
$broj = 17;
if ($broj === 1) {
	echo "Sije�anj";
	}
else if ($broj === 2) {
	echo "Velja�a";
	}
else if ($broj === 3) {
	echo "O�ujak";
	}
else if ($broj === 4) {
	echo "Travanj";
	}
else if ($broj === 5) {
	echo "Svibanj";
	}
else if ($broj === 6) {
	echo "Lipanj";
	}
else if ($broj == 7) {
	echo "Srpanj";
	}
else if ($broj === 8) {
	echo "Kolovoz";
	}
else if ($broj === 9) {
	echo "Rujan";
	}
else if ($broj === 10) {
	echo "Listopad";
	}
else if ($broj === 11) {
	echo "Studeni";
	}
else if ($broj === 12) {
	echo "Prosinac";
	}
else {
	echo "Nema tog mjeseca";
	}
?>
<br>
<?php	
$broj = 2;
switch ($broj) {    // biti �e samo jedan blok
	case 1:            // uspore�uje 1 sa vrijednosti u zagradi iza "switch"
		echo "Sije�anj";
		break;
	case 2:
		echo "Velja�a";
		break;
	case 3:
		echo "O�ujak";
		break;
	case 4:
		echo "Travanj";
		break;
	default:			//zavr�ni "switch"
		echo "To nije mjesec";
		break;
	}
?>
<br>
<h3> Petlja, zadatak 1</h3>
<?php
echo "Kvadrati prvih 20 brojeva<br><br>"; //kvadrati prvih 20 brojeva
for ($i=1; $i<=20; $i++) {
	echo $i," = ", $i*$i, "<br>";
	}
?>
<br>
<br>
<?php
echo "Brojevi 1-20 i njihovi kvadrati u while petlji<br><br>";
$i = 1;
while ($i<=20) {
	echo $i," = ",$i*$i, "<br>";
	$i++;
	}
?>
<br>
<h3>Ra�unanje cestarine</h3>
<?php
	$duzina_vozila=1.7;
	$prikolica=true;
	if ($duzina_vozila <= 1.20) {
		$cijena=15;
		}
	else if ($duzina_vozila > 1.2 && $duzina_vozila <= 3.5) {
		$cijena = 23;
		}
	else  {
		$cijena = 31;
		}
	if ($prikolica = true) {
		$cijena = $cijena + 9;
		echo "Cijena cestarine je: ", $cijena, " kn.";
		}
	else {
		echo "Cijena cestarine je: ", $cijena, " kn.";
		}
?>