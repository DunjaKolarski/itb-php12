<?php
    /* 3. zadatak */
    $cena = 500;
    $nov = 1000;
    $kusur = $nov - $cena;
    echo "Rezultat zadatka je " . $kusur;
    echo "<br>";
    /* 4. zadatak */
    $eur = 100;
    $kursEur= 117.5;
    $din = $eur * $kursEur;
    echo "Vrednost u dinarima nakon konverzije: " . $din;
    echo "<br>";

    /* 5. zadatak */
    $din = 10000;
    $eur = $din / $kursEur;
    echo "Vrednost u eurima nakon konverzije: " . $eur;
    echo "<br>";

    /* 6. zadatak */
    $eur = 100;
    $kursEurDin = 117.5;
    $kursDolDin = 106.7;
    //$din = $eur * $kursEurDin; //broj dinara koji imamo nakon konverzije eur u din
    //$dol = $din / $kursDolDin; //broj dolara koji imamo nakon konverzije din u dol
    $dol = $eur * $kursEurDin / $kursDolDin;
    echo "<hr>";
    echo "Vrednost u dolarima nakon konverzije: " . $dol;
    echo "<hr>";

    /* 7. zadatak */
    //$din = $dol * $kursDolDin //broj dinara koji imamo nakon konverzije dol u din
    //$eur = $din / $kursEurDin //broj eura koji imamo nakon konverzije din u eur
    $dol = 110;
    $kursEurDin = 117.5;
    $kursDolDin = 106.7;
    $eur = $dol * $kursDolDin / $kursEurDin;
    echo "<hr>";
    echo "Vrednost u eurima nakon konverzije: " . $eur;
    echo "<hr>";

    /* 8. zadatak */
    $cel = 30;
    $far = $cel * 1.8 + 32;
    $celIzFar = ($far - 32) / 1.8;
    echo "<hr>";
    echo "Vrednost u Farenhajtima iznosi: " . $far;
    echo "<hr>";
    echo "<hr>";
    echo "Vrednost u Celzijusima iznosi: " . $celIzFar;
    echo "<hr>";

    /* 9. zadatak */
    $cel = 30;
    $kel = $cel + 273.15;
    $celIzKal = $kel - 273.15;
    echo "<hr>";
    echo "Vrednost u Farenhajtima iznosi: " . $kel;
    echo "<hr>";
    echo "<hr>";
    echo "Vrednost u Celzijusima iznosi: " . $celIzKal;
    echo "<hr>";

    /* 10. zadatak */

    $cena = 70;
    $popust = 20;
    $cenaBezPopusta = $cena * 100 / (100 - $popust);
    echo "<hr>";
    echo "Cena bez popusta: " . $cenaBezPopusta;
    echo "<hr>";
    // Drugi nacin:
    $udeo = ( 100 - $popust ) / 100;
    $cenaBezPopusta = $cena / $udeo;
    echo "<hr>";
    echo "Cena bez popusta: " . $cenaBezPopusta;
    echo "<hr>";

    /* 11. zadatak */
    //ostale uraditi za domaci ovaj dopuniti pogledati video sa casa
    // Boc: 3   ->  1 dan,    0 tableta neiskor.
    // Boc: 4   ->  1 dan,    1 tableta neiskor.
    // Boc: 5   ->  1 dan,    2 tablete neiskor.
    // Boc: 6   ->  2 dana,   0 tableta neiskor.
    // Boc: 7   ->  2 dana,   1 tableta neiskor.
    // Boc: 8   ->  2 dana,   2 tablete neiskor.
    // Boc: 9   ->  3 dana,   0 tableta neiskor.
    $n = 9;
    $brojDana = floor($n / 3);
    $brojNeiskorTableta = $n % 3;    // ostatak pri deljenju $n sa 3 (0, 1 ili 2)
    echo "<hr>";
    echo "Broj dana: " . $brojDana;
    echo "<br>";
    echo "Broj neiskoriscenih tableta: " . $brojNeiskorTableta;
    echo "<hr>";



?>