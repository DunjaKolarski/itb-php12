<?php

    // Zadatak 1

    $polaznici = []; // prazan niz polaznici
    $polaznici[] = "Aleksandar";// na kraju niza dodaj
    $polaznici[] = "Uros";//  š bi brojalo kao dva karaktera zbog podesavanja(uroš) 
    $polaznici[] = "Milijana";
    $polaznici[] = "Andreja";
    $polaznici[] = "Nikola";

    var_dump($polaznici);
    echo "<br>";
    print_r($polaznici);

    $duzina = count($polaznici); // Prebrojava koliko polaznika ima tj. koliko ima elemenata u nizu
    echo "<p>U nizu ima $duzina polaznika</p>";

    // Koristicemo petlju koja ce ispisivavati jednog po jednog elementa niza da ne bi ispisivali sa vardump i prinr jer uz te funkc pise i druge stvari sem samih elemenata
    for($i = 0; $i < 4; $i++)
    {
        echo "<p>$polaznici[$i]</p>";
    }
    echo "<br>";
    for($i = 0; $i < $duzina; $i++) // da bi ispisali i Nikolu jer smo ga dodali kasnije on je  element sa indeksom 4 pa ga prethodna  for ne bi ispisala
    {
        echo "<p>$polaznici[$i]</p>";
    }

    echo "<br>";

    // Zadatak 2

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $suma = 0; // mora biti definisana pre petlje

    for($i = 0; $i < count($brojevi); $i++)
    {
        //echo "<p>$brojevi[$i]</p>";
        $suma += $brojevi[$i];
    }
    echo "<p>Suma elementa niza je: $suma</p>";
    // ugradjena funkcija za racunanje sume elemenata u nizu(zbira) array_sum($imeniza)
    $zbir = array_sum($brojevi);
    echo "<p>Zbir elementa niza je: $zbir</p>";
    


    // Zadatak 3
    $brElemenata = count($brojevi);
    $arsr = $zbir / $brElemenata; // $arsr = array_sum($brojevi) / count($brojevi);
    echo "<p>Aritmeticka sredina elemenata niza je: $arsr</p>";

    // nije dozvoljeno deljenje nulom (nula kroz nesto moze ali ovo ne) tako da je niz prazan ovo ne bi radilo
    // dopuna

    if($brElemenata == 0)
    {
        echo "<p>Prazan niz aritmeticka  sredina elemenata niza je 0</p>";
    }
    else
    {   
        $arsr = $zbir / $brElemenata;
        echo "<p>Aritmeticka sredina elemenata niza je: $arsr</p>";
    }

    // ima jos nacina u kodu sa casa

    // Zadatak 4
    $brojevi = [5, 14, -4, 0, 11, -7, 91];
    $najveciBr = $brojevi[0];

    for($i = 0; $i < count($brojevi); $i++) // pretpostavljamo da je prvi element niza najveci ...// mozemo staviti $i =1; da ne poredimo 5 sa 5 nepotrebno
    {
        if($najveciBr < $brojevi[$i])
        {
            $najveciBr = $brojevi[$i];
        }
    }
    echo "<p>Najveci broj niza je $najveciBr</p>";
    
    // Zadatak 6

    $brojevi = [5, 14, -4, 14, 11, -7, 14]; //indeksi 14: 1, 3, 6

    // 6.1 indeks prvog pojavljivanja max elementa
    $maks = $brojevi[0];
    $indeksMaks = 0; // indeks maksimuma

    // 1. nacin

    for($i = 0; $i < count($brojevi); $i++)
    {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks)
        {
            $maks = $trenutniElement;
        }
    }
    for($i = 0; $i < count($brojevi); $i++)
    {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement == $maks)
        {
            $indeksMaks = $i;
            break;
        }
    }
    echo "<p>Prvi najveci element niza je $maks
    a njegov indeks je $indeksMaks</p>";

    // 2. nacin 
    
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; //indeksi 14: 1, 3, 6

    $maks =$brojevi[0];
    $indeksMaks = 0; // indeks maksimuma

    for($i = 0; $i < count($brojevi); $i++)
    {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks)
        {
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a indeks njegovog prvog pojavljivanja je $indeksMaks</p>";

    // ugradjena funkcija maksimuma  daje prvi element maksimum a ne poslednjeg npr 

    // 6.2 indeks poslednjeg pojavljivanja max elementa

    // 1. nacin

    $brojevi = [5, 14, -4, 14, 11, -7, 14]; //indeksi 14: 1, 3, 6

    $maks =$brojevi[0];
    $indeksMaks = 0; // indeks maksimuma

    for($i = 0; $i < count($brojevi); $i++)
    {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement >= $maks) /////////// dodavanjem ovog  =  dolazimo do poslednjeg najveceg elementa i njegovog indeksa
        {
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";

    // 2. nacin

    $brojevi = [5, 14, -4, 14, 11, -7, 14]; 
    $brElemenata = count($brojevi);
    $indeksMaks = $brElemenata - 1;
    $maks =$brojevi[$indeksMaks]; //// kretanje od poslednjeg elementa niza 

    for($i = $indeksMaks; $i >= 0 ; $i--)
    {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks)
        {
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";



    // Svi maksimumi

    // 1. nacin

    $brojevi = [5, 14, -4, 14, 11, -7, 14]; 
    $maks =$brojevi[$indeksMaks]; //// kretanje od poslednjeg elementa niza 

    // 1. prolazak odredjuje maksimum
    for($i = 0; $i < count($brojevi) ; $i++)
    {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks)
        {
            $maks = $trenutniElement;
        }
    }
    echo "<p>Najveci element ima vrednost $maks. A indeksi pojavljivanja ovog elementa su: ";
    // 2. prolazak trazi sve elemente jednake maksimumu i belezi nnjihove indekse

    $sviIndeksiMaks = [];
    for($i = 0; $i < count($brojevi) ; $i++)
    {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement == $maks)
        {
            $sviIndeksiMaks[] = $i;
            echo "$i ";
        }
    }

    echo "<hr>";

    // 2. nacin sa koda prepisati u vezbi

    // Zadatak 7

    $brojevi =[1, 2, 15];

    // Netacan pristup:
    // $zbir = 0;
    // $broj = 0;
    // for ($i = 0; $i < count($brojevi); $i++)
    // {
    //     $zbir += $brojevi[$i];
    //     $arsr = $zbir / count($brojevi); // greska cesta jer ovo ne predstavlja srednju vrednost niza
    //     if ($brojevi[$i] > $arsr)
    //     {
    //         $broj++;

    //     }
    // }
    // echo "<p>Broj brojeva vecih od srednje vrednosti niza je $broj</p>";

    $brojevi =[1, 2, 15];
    $zbir = 0;
    $broj = 0;
    for ($i = 0; $i < count($brojevi); $i++)
    {
        $zbir += $brojevi[$i];
    }
    $arsr = $zbir / count($brojevi); 
    for ($i = 0; $i < count($brojevi); $i++)
    {
        if ($brojevi[$i] > $arsr)
        {
            $broj++;
        }
    }

    echo "<p>Broj brojeva vecih od srednje vrednosti niza je: $broj</p>";
    echo "<hr>";
    // Zadatak 8

    $brojevi =[1, 2, -2, 15];
    $zbir = 0;
    for ($i = 0; $i < count($brojevi); $i++) // razmak nakok for pise prof jer je ovako ispravno u c++ pa je navikao radi i bez toga
    {
        if ($brojevi[$i] > 0)
        {
            $zbir += $brojevi[$i];
        }
    }
    echo "<p>Zbir pozitivnih elemenata niza je: $zbir</p>";
    echo "<hr>";

    // Zadatak 9

    $brojevi =[1, 2, -2, 15];
    $brojElem = 0;

    for ($i = 0; $i < count($brojevi); $i++)
    {
        if ($brojevi[$i] % 2 == 0)
        {
            $brojElem++;
        }
    }
    echo "<p>Broj parnih elemenata u celobrojnom nizu je $brojElem</p>";

    // Zadatak 10
    $brojevi =[1, 2, -2, 15];
    $suma = 0;

    for ($i = 0; $i < count($brojevi); $i++)
    {
        if ($i == 0 || $i % 2 == 0 )
        {
            $suma += $brojevi[$i];
        }
    }
    echo "<p>Suma elemenata u nizu sa parnim indeksom je: $suma</p>";

    // 2. nacin
    // for ($i = 0; $i < count($brojevi); $i += 2)
    // {
    //         $suma += $brojevi[$i];
    // }

    // Bonus zadatak
    // Izracunati srednju vrednost parnih elemenata celobrojnog niza
    $brojevi =[10, 9, 15, 50];
    $zbir = 0;
    $broj = 0;
    for ($i = 0; $i < count($brojevi); $i++)
    {
        if ($brojevi[$i] % 2 == 0)
        {
            $zbir += $brojevi[$i];
            $broj++;
        }
    }
    $srvr = $zbir / $broj;
    if ($broj != 0)
    {
        $srve = $zbir / $broj;
    }
    else
    {
        $srvr = 0;
    }

    echo "<p>Srednja vrednost parnih elemenata u nizu je: $srvr</p>";
    

    // Zadatak 11
    // promeniti znak svakom elementu celobrojnog niza **** mnozimo svaki element sa -1
    $brojevi =[10, 9, 15, 50];
    var_dump($brojevi);
    for ($i = 0; $i < count($brojevi); $i++)
    {
        $brojevi[$i] *= -1;
        // $brojevi[$i] = $brojevi[$i] * (-1); isto znacenje
        // $brojevi[$i] = -$brojevi[$i];
    }
    var_dump($brojevi);

    echo "<br>";

    // Zadatak 12
    $brojevi =[10, 9, 15, 50];
    var_dump($brojevi);
    for ($i = 0; $i < count($brojevi); $i++)
    {
        if ($i % 2 == 0 && $brojevi[$i] % 2 != 0)
        {
                $brojevi[$i] *= -1;
        }
    }
    var_dump($brojevi);
    echo "<br>";

    // Zadatak 13 
    $brojevi =[10, 9, 15, 50];
    $brojElem = 0;
    for ($i = 0; $i < count($brojevi); $i++)
    {
        if ($i % 2 != 0 && $brojevi[$i] % 2 == 0)
        {
                $brojElem++;
        }
    }
    echo "<p>Broj parnih elemenata sa neparnim indeksom je: $brojElem</p>";

    // Zadatak 14
    $imena = ["Dunja","Dejan","Dejzi"];
    for ($i = 0; $i < count($imena); $i++)
    {
        echo "<p>Duzina elementa " . $imena[$i] . " je " . strlen($imena[$i]) . "</p>";
    }

    // 2. nacin

    $imena = ["Dunja", "Dejan", "Dejzi", "Elizabeta"];
    for ($i = 0; $i < count($imena); $i++)
    {
        $ime = $imena[$i];
        $duzina = strlen($imena[$i]);
        echo "<p>Duzina stringa $ime je $duzina</p>";
    }
    // mb_strlen za š itd  i da se podesi u headu utf 8 itd

    // Zadatak 15 //// bitan zadatak bilo je slicnih kada je poredi sa prvim  da li je broj veci manji itd
    $stringMaxDuzine = $imena[0];
    $maxDuzina = strlen($imena[0]);
    for ($i = 1; $i < count($imena); $i++) //predpost da prvi elem ima max duzinu pa je zato $i = 1 jer krecemo od drugog da poredimo sa prvim nema potrebe prvi sa prvim
    {
        if (strlen($imena[$i]) > $maxDuzina)
        {
            $maxDuzina = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
    }

    echo "<p>Element niza sa maksimalnom duzinom je: $stringMaxDuzine</p>";
    
    // Zadatak 17
    // kako da odredimo da li se u nekom stringu nalazi neki podstirng?
    // koristimo funkciju strpos($string1,$string2)
    // rezultat poziva ove funkcije:
    // 1. Ako se $string2 nalazi unutar $string1, onda se vraca INDEKS prvog pojavljivanja!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // rezultat je CEO BROJ (0, 1, 2, 3,..)
    var_dump( strpos("Sredaaa", "a")); // rez int(4) 

    // 2. Ako se $string2 ne nelazi unutar $string1, onda se vraca FALSE 
    // rezultat je LOGICKA VREDNOST
    var_dump( strpos("Sredaaa", "s")); // rez FALSE
    if (strpos("Sredaaa", "a") != false) // ispitujemo da li je 4 razlicito od false u ovom slucaju jedino 0 dobija vrednost false sve ostale vrednosti imaju logicku vrednost true
    {
        echo "<p>String 'a' se nalazi u stringu 'Sredaaa'</p>";
    }
    else
    {
        echo "<p>String 'a' se ne nalazi u stringu 'Sredaaa'</p>";
    }

    if (strpos("Sredaaa", "S") != false) // ispitujemo da li je 0 razlicito od false , da li je false razl od false , nije i ide na else i ispisace da se S ne nalazi u string Sredaaa i ako to nije tako 
    {
        echo "<p>String 'S' se nalazi u stringu 'Sredaaa'</p>";
    }
    else
    {
        echo "<p>String 'S' se ne nalazi u stringu 'Sredaaa'</p>";
    }
    // nije dovoljno pitati da li je razlicito samo po vrednosti vec i po vrednosti i po tipu!!!!!!!!!!!!!!! dodavanje !== dva znaka jednako 

    if (strpos("Sredaaa", "S") !== false) 
    {
        echo "<p>String 'S' se nalazi u stringu 'Sredaaa'</p>";
    }
    else
    {
        echo "<p>String 'S' se ne nalazi u stringu 'Sredaaa'</p>";
    }

    $imena = ["Dunja", "Dejan", "Dejzi", "Elizabeta", "Uros"];
    $brojSadrziA = 0;
    for ($i = 0; $i < count($imena); $i++)
    {
        if (strpos($imena[$i], "a") !== false)
        {
            $brojSadrziA++;
        }
    }
    echo "<p>Broj stringova koji sadrze slovo 'a' je $brojSadrziA</p>";

    // Zadatak 18

    $imena = ["Dunja", "Dejan", "Dejzi", "Elizabeta", "Uros", "Andreja"];
    $brojPocinjeA = 0;
    for ($i = 0; $i < count($imena); $i++)
    {
    if (strpos($imena[$i], "a") === 0 ||(strpos($imena[$i], "A") === 0 )) // if ($imena[$i][0]== 'a' || $imena[$i][0]== 'A')
        {
            $brojPocinjeA++;
        }
    }
    echo "<p>Broj stringova koji pocinju na  slovo 'a' je $brojPocinjeA</p>";


















    
    



?>