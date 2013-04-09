<?php
	$abido = array (
		'kabesh' => 8,
		'falafel' => 'unknown quality',
		'seven spices' => 7,
		'shawarma' => 'unknown quality',
		);
	print_r ($abido);
	echo "<br>";
	echo strlen($abido["falafel"]);
?>
<br><br>
<?php
$ime = 'Anakin';
$obrnutoIme = '';
for ($i=0; $i<=strlen($ime)-1; $i++) {
	$obrnutoIme = $obrnutoIme . $ime[$i];
	# echo $ime[$i] . "<br>"; //pravljenje niza od stringa pomoću viticastih zagrada ispisuje slova
	}
echo $obrnutoIme;
?>

