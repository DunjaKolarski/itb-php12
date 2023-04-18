<?php
    //echo uvek trazi string i konvertuje se bilo sta u echo u string
    $a = 100;
    $b = $a - 20;
    echo "Ovo je proba";
    echo "<br>";
    echo "Vrednost promenljive b je " . $b;
    //da bi echo radio i prebacio u stirng moramo koristiti duple navodnike a ne  sa jednim navodnikom
    $c = "3";
    $d = $c + 3;
    echo "<br>";
    echo $d;
    //kad bi $d = "zdravo" + 2; ispao bi error vec umesto sabiranja + koristimo . za sabiranje tj spajanje stringova

    echo "<hr>";
    /* 1. zadatak */
    $h = 20;
    $m = 35;

    $rez = $h * 60 + $m;
    echo "Rezultat zadatka je " . $rez;
    echo "<br>";

    /* 2. zadatak */
    date_default_timezone_set("Europe/Belgrade");
    $sati = date("G"); // prouciti date funkciju 
    $minuti = date("i");
    echo "Trenutno vreme je " . $sati . "sati i " . $minuti . "minuta";
    echo "<br>";
    $rezNovi = $sati * 60 + $minuti;
    echo "Rezultat zadatka je " . $rezNovi;
    echo "<br>";

    /* 3. zadatak */
    $cena = 500;
    $nov = 1000;
    $kusur = $nov - $cena;
    echo "Rezultat zadatka je " . $kusur;
    echo "<br>";

    /* 4. zadatak */
    $eur = 100;
    $din = $eur * 120;
    echo "Rezultat zadatka je " . $din;
    echo "<br>";

    /* 5. zadatak */
    $din = 10000;
    $eur = $din / 120;
    echo "Rezultat zadatka je " . $eur;
    echo "<br>";

?>