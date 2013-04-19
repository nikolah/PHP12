<?php //1-39 i 1-40 - ispisuje tekst datoteke poštivajući nove linije, broji nove linije, znakove i rečenice te ispisuje njihov broj
//$fp = file_get_contents('tekst2.txt');
$fp = fopen('tekst.txt', 'r');
$citalac = fread($fp, 1024);
$brojRedova = 0;
$brojRecenica = 0;
$brojZnakova = strlen($citalac);
for ($i=0; $i<=$brojZnakova-1; $i++) {
	if ($citalac[$i] !== "\n") {
	echo ($citalac[$i]); //ispisuje tekst znak po znak
	}
	else {
	$brojRedova = $brojRedova + 1; //Broji redove
	echo '<br>'; //kod ispisivanja teksta, prelazi ispisivati u novi red
	}
	if ($citalac[$i] == ".") {
	$brojRecenica = $brojRecenica + 1;
	}
}

echo '<br><br> Broj znakova: ' . $brojZnakova . '<br>';
echo 'Broj redova (linija): ' . $brojRedova . '<br>';
echo 'Broj rečenica: ' . $brojRecenica . '<br>';
?>