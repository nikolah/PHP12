1. Od kojih se Asci znakova koristi vaše ime? <br>
2. Funkcija koja vraća random password od 8 slova 
								rand(72, 122)
	* broj slova argument - vraća - 12 znakova
	** uključite i neke druge znakove <br>
3. Funkcija koja od 'Ime', 'Prezime' vraća 'iprezime' 
	* ograničiti username na 8 znakova <br>

4.* - napišite kod koji će 'očistiti' telefonski broj tipa 091/987-66 od crtica, razmaka i ostalih znakova
	* - dodatna provjera dužine telefonskog broja <br>
<br><br>

<?php
	// Zadatak 1
	$mojeIme = 'Nikola';
		for($i=0; $i<strlen($mojeIme); $i++) {
		echo ord($mojeIme[$i]) . '<br>';
		}
?>
<br><br>
<?php
	// Zadatak 2
		for($i=0; $i<8; $i++) {
		$randomZnak = chr(rand(97, 122));
		echo $randomZnak;
		}
?>
<br><br>
<?php
	// Zadatak 2 *
		for($i=0; $i<12; $i++) {
		$randomZnak = chr(rand(97, 122));
		echo $randomZnak;
		}
?>
<br><br>
<?php
	// Zadatak 2 **
		for($i=0; $i<12; $i++) {
		$randomZnak = chr(rand(32, 126));
		echo $randomZnak;
		}
?>
<br><br>
<?php
	// Zadatak 3
		mb_internal_encoding('UTF-8');
		$ime = 'Milena';
		$prezime = 'Dravić';
		$username = mb_strtolower($ime[0] . $prezime);
		echo $username;
?>
<br><br>
<?php
	// Zadatak 3*
		mb_internal_encoding('UTF-8');
		$ime = 'Milena';
		$prezime = 'Dravićkkkkkommm';
		$username = mb_strtolower($ime[0] . $prezime);
		echo substr($username, 0, 9);
?>
<br><br>
<?php
	// Zadatak 4
		$telBroj = '091/9837-2898-9';
		for ($i=0; $i<strlen($telBroj); $i++) {
		# echo $telBroj[$i] . '<br>';
		if ($telBroj[$i] === "/" || $telBroj[$i] === "+" || $telBroj[$i] === "-") {
		str_replace($telBroj[$i], '', $telBroj);
		}
			else {
		echo $telBroj[$i];
			}
		}
?>
<br><br>
<?php
	// Zadatak 4
		$telBroj = '091/9837-28';
		$broj = 0;
		for ($i=0; $i<strlen($telBroj); $i++) {
		# echo $telBroj[$i] . '<br>';
		
		if ($telBroj[$i] === "/" || $telBroj[$i] === "+" || $telBroj[$i] === "-") {
		str_replace($telBroj[$i], '', $telBroj);
		}
			else {
		$konacniBroj = $telBroj[$i];
		$broj = $broj + strlen($konacniBroj);
			}
		}
		if ($broj < 7 || $broj > 10) {
		echo "Ponovi upis broja";
		}
		else { 
		echo "Broj znakova tel. broja je: " . $broj;
		}
?>