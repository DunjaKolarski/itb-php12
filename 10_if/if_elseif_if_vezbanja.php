<?php

    // Zadatak 7

    $poeni = 73;
    if ($poeni <= 50)
    {
        echo "<p>Student je pao ispit</p>";
    }
    elseif ($poeni <= 60)
    {
        echo "<p>Ocena je 6</p>";
    }
    elseif ($poeni <= 70)
    {
        echo "<p>Ocena je 7</p>";
    }
    elseif ($poeni <= 80)
    {
        echo "<p>Ocena je 8</p>";
    }
    elseif ($poeni <= 90)
    {
        echo "<p>Ocena je 9</p>";
    }
    else 
    {
        echo "<p>Ocena je 10</p>";
    }


    // 8 Zadatak
    $danUNedelji = date("w");

    if ($danUNedelji == 0)
    {
        echo "Vikend";
    }
    elseif ($danUNedelji == 6)
    {
        echo "Vikend";
    }
    else
    {
        echo "Vikend";
    }


    // 9 Zadatak

    echo "<br>";
    date_default_timezone_set('Europe/Belgrade'); // podesavanje nase zone!!
    $vremeSaRacunara = date("H");
    //echo $vremeSaRacunara;

    if ($vremeSaRacunara < 12 )
    {
        echo "Dobro jutro";
    }
    elseif ($vremeSaRacunara < 18 )
    {
        echo "Dobar dan";
    }
    else
    {
        echo "Dobro vece";
    }

    echo "<br>";

    // 10 Zadatak

    $prviDatumD = 20;
    $prviDatumM = 2;
    $prviDatumG = 2023; 

    $drugiDatumD = 10;
    $drugiDatumM = 1;
    $drugiDatumG = 2022;
    $prviDatum =  "Prvi datum je: " . $prviDatumD . ". " .  $prviDatumM . ". " . $prviDatumG . ". ";
    echo "<br>";
    $drugiDatum = "Drugi datum je: " . $drugiDatumD . ". " .  $drugiDatumM  . ". " . $drugiDatumG . ". ";
    echo "<br>";
    echo $prviDatum;
    echo "<br>";
    echo $drugiDatum;
    echo "<br>";

    if ($prviDatumG < $drugiDatumG)
    {
        echo "Prvi datum je raniji"; // echo "Raniji datum je $prviDatumD.$prviDatumM.$prviDatumG";
    }
    elseif ($drugiDatumG < $prviDatumG)
    {
        echo "Drugi datum je raniji";
    }
    elseif ($prviDatumM < $drugiDatumM)
    {
        echo "Prvi datum je raniji";
    }
    elseif ($drugiDatumM < $prviDatumM)
    {
        echo "Drugi datum je raniji";
    }
    elseif ($prviDatumD < $drugiDatumD)
    {
        echo "Prvi datum je raniji";
    }
    elseif ($drugiDatumD < $prviDatumD)
    {
        echo "Drugi datum je raniji";
    }
    else {
        echo "Datumi su isti";
    }

    echo "<br>";

    // 11 Zadatak 
    date_default_timezone_set('Europe/Belgrade'); // podesavanje nase zone!!
    $vremeSaRacunara = date("H");

    if ($vremeSaRacunara < 9)
    {
        echo "Programerska firma ne radi";
    }
    elseif ($vremeSaRacunara >= 17)
    {
        echo "Programerska firma ne radi";
    }
    else
    {
        echo "Programerska firma radi";
    }
    // 12 zadatak
    //detaljno objasnjen na videu pregledati
    // Prvi lekar
    $p1 = 9; //pocetno vreme rada
    $k1 = 17; //krajnje vreme rada
    
    // Drugi lekar
    $p2 = 11;
    $k2 = 18;

    if ($k1 < $p2)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    elseif ($k2 <$p1)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    else
    {
        echo "<p>Preklapaju se</p>";
    }
    // 13 Zadatak
    $n = 13;
    if ($n %2 == 0)
    {
        echo "<p> Broj $n je paran</p>";
    }
    else
    {
        echo "<p> Broj $n je neparan</p>";
    }

    // 14 Zadatak
    $n = 13;
    if ($n %3 == 0)
    {
        echo "<p> Broj $n je deljiv sa 3</p>";
    }
    else
    {
        echo "<p> Broj $n nije deljiv sa 3</p>";
    }

    // 15 Zadatak
    $b1 = 200;
    $b2 = 20;


    if ($b1 > $b2) 
    {
        $rez1 = $b1 - $b2;
        echo $rez1;
    }
    else
    {
        $rez2 = $b2 - $b1;
        echo $rez2;
    }

    // 16 Zadatak
    $broj = -10;

    if ($broj <= 0)
    {   
        $prethodink = $broj - 1; 
        echo "<p>$prethodink</p>";

    }
    else 
    {
        $sledbenik = $broj + 1; 
        echo "<p>$sledbenik</p>";
    }
    
    // 17 Zadatak
    $a = 5;
    $b = 9;
    $c = -3;

    $max = $a;
    if ($b > $max)
    {
        $max = $b;
    }
    if ($c > $max)
    {
        $max = $c;
    }
    $min = $a;
    if ($b < $min)
    {
        $min = $b;
    }
    if ($c < $min)
    {
        $min = $c;
    }
    $sr = $a + $b + $c - ($min +$max);


    // 18 Zadatak
    $br1 = 10.5;

    if (is_int($br1))
    {
        echo "<p>Broj $br1 je ceo broj</p>";
    }
    else 
    {
        echo "<p>Broj $br1 nije ceo broj</p>";
    }



    ?>