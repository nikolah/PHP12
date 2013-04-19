<?php
$fp = fopen('tekst4.txt', 'w'); // zbog 'w' omogućava se pisanje teksta u fileu preko postojećeg ako postoji, a ako ne postoji, kreira se
$zeljeniTekst = '99 bottles of beer on the wall, 
Janko Beneluks - Popivoda';
fwrite($fp, $zeljeniTekst); // upisivanje novog teksta u datoteku pomoću 'fwrite'
//$read = fread($fp, 1024); - ne radi (zbog 'w' u "fileopen")
$read = file_get_contents('tekst3.txt');
echo $read;
?>