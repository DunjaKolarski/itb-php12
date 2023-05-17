<?php
// php

// 2 zadatak 

$sati = date('G');
$minuti = date('i');
$minuti_od_ponoci = $sati * 60 + $minuti;
echo "<br>";
echo $minuti_od_ponoci;

// 4 zadatak
// Data je promenljiva $eur čija je vrednost iznos u eurima koji klijent ima kod sebe. Odrediti iznos u dinarima koji klijent dobija prilikom konverzije. Koristiti srednji kurs eura.

$eur = 100;
$kursEur= 117.5;
$din = $eur * $kursEur;
echo "Vrednost u dinarima nakon konverzije: " . $din;
echo "<br>";

// 5 zadatak
// Data je promenljiva $din čija je vrednost iznos u dinarima koji klijent ima kod sebe. Odrediti iznos u eurima koji klijent dobija prilikom konverzije. Koristiti srednji kurs eura.
$din = 10000;
$eur = $din / $kursEur;
echo "Vrednost u eurima nakon konverzije: " . $eur;
echo "<br>";

// 6 zadatak 
// Data je promenljiva $eur čija je vrednost iznos u eurima koji klijent ima kod sebe. Odrediti iznos u dolarima koji klijent dobija prilikom konverzije, ako je poznat srednji kurs eura prema dinaru, kao i srednji kurs dolara prema dinaru.
$eur = 100;
$kursEurDin = 117.5;
$kursDolDin = 106.7;
//$din = $eur * $kursEurDin; //broj dinara koji imamo nakon konverzije eur u din
//$dol = $din / $kursDolDin; //broj dolara koji imamo nakon konverzije din u dol
$din = $eur * $kursEurDin;
$dol = $din / $kursDolDin;
echo "<hr>";
echo "Vrednost u dolarima nakon konverzije: " . $dol;
echo "<hr>";

// 7 zadatak
// Data je promenljiva $dol čija je vrednost iznos u dolarima koji klijent ima kod sebe. Odrediti iznos u eurima koji klijent dobija prilikom konverzije, ako je poznat srednji kurs eura prema dinaru, kao i srednji kurs dolara prema dinaru. 
$dol = 120;
$kursEurDin = 117.5;
$kursDolDin = 106.7;
$din = $dol * $kursDolDin;
$eur = $din / $kursEurDin;
echo "<hr>";
echo "Vrednost u eurima nakon konverzije: " . $eur;
echo "<hr>";

// 8 zadatak

$cel = 30;
$far = $cel * 1.8 + 32;
$celIzFar = ($far - 32) / 1.8; // obrnuta konverzija
echo "<hr>";
echo "Vrednost u Farenhajtima iznosi: " . $far;
echo "<hr>";
echo "<hr>";
echo "Vrednost u Celzijusima iznosi: " . $celIzFar;
echo "<hr>";







?>