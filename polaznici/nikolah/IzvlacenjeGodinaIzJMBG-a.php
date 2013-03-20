<?php // 1-6. Izvlačenje godina iz JMBG-a pomoću "%" i "/"
	$danasnjaGodina = 2013; //date("Y");
	//$jmbg = 1910981330552;
	$jmbg = 1103950335113;
	//$jmbg = 2707007330117;
	$zadnjeZnamenke = $jmbg / 1000000;  //označavanje znamenki iza godine rođenja kao decimale
	$datum = (int)$zadnjeZnamenke;	//izbacivanje decimala kako bi nam ostali brojevi vezani uz godinu rođenja
	$krnjaGodina = $datum % 1000;  // izvlačenje zadnje tri znamenke koje nam predstavljaju godinu rođenja
	//uzimamo u obzir da je godina rođenja i nakon 2000, pa provjeravamo i računamo
	if ($krnjaGodina > 100 && $krnjaGodina < 1000) {
		$godina = $krnjaGodina + 1000;
		}
	else {
		$godina = $krnjaGodina + 2000;
		}
	echo "Godina rođenja osobe: ", $godina, ".<br>";
	$razlikaGodina = $danasnjaGodina - $godina;
	if ($razlikaGodina >= 18) {
		echo "Osoba je punoljetna. Može proći.";
		}
	else if ($razlikaGodina < 0) {
		echo "Nemoguće. Krive godine..";
		}
	else {
		echo "Osoba je maloljetna. Prolaze samo odrasli.";
		}
?>