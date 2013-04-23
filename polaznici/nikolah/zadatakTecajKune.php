<?php
	//http://www.hnb.hr/tecajn/htecajn.htm
	// > formatirani zapis
	//ispis po svim valutama
	
	$fp = fopen('http://www.hnb.hr/tecajn/f240413.dat', 'r'); //file_get_contents sa explode
	fgets($fp);

	$kn = 50;
	$ispis = '';
	#$lista = array (
	#	'aud' => 0;
	while($line = fgets($fp)) {
		# $lista[aud]
		#$ispis = $ispis . $line . '<br>';	
		$jedanIlSto = $line[6] . $line[7] . $line[8];
		$arr_line = explode('       ', $line);
		$arr_line[1][1] = '.'; //pretvara zarez decimalnog broja u točku u stringu kako bi izračun decimalnih brojeva bio točan
		# echo $arr_line[1];
		# echo " <br>";
		#echo $line[3] . $line[4] . $line[5] . "<br>";
		$dnevniTecaj = $jedanIlSto * $kn / $arr_line[1] ;
		echo $kn . ' kn je ' . $dnevniTecaj . ' ' . $line[3] . $line[4] . $line[5] . '<br>';
	
	}
?>
