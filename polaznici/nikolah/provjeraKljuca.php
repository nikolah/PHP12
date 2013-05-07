Zadatak:
<br>
Napišite funkciju koja vraća vrijednost ključa ukoliko:<br>
	- ključ postoji <br>
	- ima vrijednost <br>
	
<?php	
	function vrijednostKljuca($array, $key) {
		if (array_key_exists($key, $array)) {
			if(isset($array[$key])) {
				return $array[$key];			
			}
		}
		return false;
	}
	
	$pizza = array (
		'šunka' => 3,
		'sir' => 5,
		'gljive' => 4,
		'sos' => 5
		);
	
	echo vrijednostKljuca($pizza, 'sir');

?>