<?php //izvrnuto ime unutar petlje poziva se na ispis izvan nje (petlje)
$ime = "klokanovi";
$ime_izvan_petlje = "";
for ($i=0; $i<=strlen($ime)-1; $i++) {
	$ime_izvan_petlje = $ime_izvan_petlje . $ime[$i] . "<br>"; // uglaste zagrade iza varijable od njenog sadržaja prave niz
}
echo $ime_izvan_petlje;
?>