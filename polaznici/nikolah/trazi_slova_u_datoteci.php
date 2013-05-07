<?php // kod traži, broji i ispisuje količinu slova "e" u fileu 'tekst1.txt'
	  // sadržaj filea 'tekst1.txt': 
	  /*	cvijet ljubichica
			cvijece
			proljece
			potočić
	  */
$contents = file_get_contents('tekst1.txt');
$slovoE = 0;
for ($i=0; $i<strlen($contents); $i++) {
if ($contents[$i] == 'e') {
	$slovoE = $slovoE + 1;
	echo $slovoE . 'e <br>';
	}
}
?>