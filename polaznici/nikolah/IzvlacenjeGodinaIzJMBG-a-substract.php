<?php // 1-6. Izvlačenje godina iz JMBG-a pomoću funkcije substract - substr()
	echo "Funkcija 'substract' - bira znamenke unutar izraza po rednom broju kako želimo.<br><br>";
	echo "<b>Rješenje zadatka 1-6 pomoću funkcije substract().</b><br>";
	$jmbg = 1910981330552; 
	echo "JMBG osobe: ", $jmbg, "<br>";
	$subs = substr($jmbg, 4, 3); //izabire zadnje 3 znamenke godine rođenja
	$provjera_nule = substr($jmbg, 4, 1); //provjerava dali je peta znamenka - znamenka rođenja nula, što bi značilo da je rođenje u ili iza 2000. pa treba drugačije pisati formulu računanja starosti od današnjeg dana
	$danasnji_dan = date("Y");
	//računanje starosti
	if ($provjera_nule == 8 || $provjera_nule == 9){  //ako je osoba rođena 1800 ili 1900 i neke
		$starost = $danasnji_dan - ($subs + 1000);
		}
	else {
		$starost = $danasnji_dan - ($subs + 2000); //ako je osoba rođena 2000 i neke
		}
	//provjera i izjava ako je osoba maloljetna
	if ($starost < 0) {
		echo "Nemoguće. Broj godine rođenja nije u redu.";
		}
	else if ($starost < 18 && $starost > 0) {
		echo "Osoba ima ", $starost, " godine i maloljetna je. Ovdje mogu samo punoljetni.<br>";
		}
	else {
		echo "Osoba ima ", $starost, " godina.<br>Može proći.";
		}
?>