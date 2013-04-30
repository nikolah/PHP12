<?php
echo chr(122); //z ako - pogodno za random tekstove
echo ord('z');
//ASCII npr chr(13), chr(10)
// od znaka u ascii tablici imamo sve što ima i na tastaturi 32 do 126
echo chr(ord('a'));
//strlen()  - prima string a vraća integer (strlen('oas') = 3)
//utf-8 - standard(ascii) vidljiv cijelom svijetu
//mb_strlen() - vraća točnu vrijednost stringa s obzirom na slavenske znakove::
mb_internal_encoding('UTF-8'); // moramo definirati da bi 'mb...' radio
var_dump(mb_strlen('mačka'));
?>
<br><br>
<meta charset= "utf-8">
<?php
// s meta charset ... definiramo da na browseru čitanje kakvo želimo (probaj obrisati)
	echo trim('mačka'); // ima i rtrim, ltrim i još tih trimova
	echo '<br>';
	echo mb_strtolower("ZAgREbČ") . '<br>'; // vraća mala slovaž
	echo strtoupper("ZAgREb"); // vraća VElika slova
	
	//rješavanje pprvog velikog slova
	$unos = 'ZAGREB';
	echo '<br>';
	echo $grad = mb_strtolower($unos);
	$grad[0] = $unos[o];
	//ucfirst() - funkcija povećava samo prva slova. al moramo prvo smanjiti ostala
	# var_dump
	echo mb_convert_case('đakoVO', MB_CASE_UPPER); //korištenje MB_CASE_UPPER kao konstanti MB...._LOWER, ..._TITLE
	//preporučljivo je koristiti MB_CASE_TITLE
	//funkcija wordwrap();
	echo '<br>';
	$title = 'Quick Brrown for FOxx nesto nesto i onda opet Quick Brown';
	echo wordwrap($title, 20, '<br>', true); //ima 4 argumenta, prelama string - po defaultu, prvi prijelom nakon 75 znakova
														  //true ili false određuje dali će se prelamati riječ bez razmaka nakon 20 znakova(u ovom primjeru)
	//$stariPrijatelj = substr('mačka', 2, 2); // substr() ima može imati i negativne argumente - broje odzada ('idi od kraja')
	//$stariPrijatelj = mb_substr('mačka', 2, 2, 'utf-8'); // ima, za razliku ud 'substr()' i četvrti ergument - 'encoding' . ukoliko nije naveden 4. argument, koristi se difoltni naveden u početku skripte: "mb_internal_encoding('UTF-8');"
	echo'<br>';
	echo mb_substr('mačka', -3, -2)
	//echo $stariPrijatelj;
	
?>