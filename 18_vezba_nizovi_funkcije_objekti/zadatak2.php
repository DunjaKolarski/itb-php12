<?php

    // ZADATAK 2. (NIZOVI ASOCIJATIVNIH NIZOVA)
    // Za nekog studenta pamtimo informacije o ispitima koje je položio na nekom fakultetu. Za svaki ispit pamtimo sledeće informacije:
    // naziv ispita (string),
    // datum polaganja (string u formatu YYYY/MM/DD),
    // ocena (ceo broj između 6 i 10).
    // Za studenta pamtimo niz čiji elementi sadrže date informacije.
    // 7. Kreirati niz po uslovima zadatka od barem pet elemenata.
    // Napisati sve funkcije iz Zadatka 1 i za ovaj zadatak.

    $student1 = [
        ["naziv" => "matematika", "datum" => "2021/12/12","ocena" => 9],
        ["naziv" => "hemija", "datum" => "2021/08/12","ocena" => 8],
        ["naziv" => "hidraulika", "datum" => "2019/02/12","ocena" => 10],
        ["naziv" => "engleski jezik", "datum" => "2020/02/12","ocena" => 10],
        ["naziv" => "sociologija", "datum" => "2021/02/12","ocena" => 10],
        ["naziv" => "statistika", "datum" => "2020/02/12","ocena" => 10]
    ];
    // 3. Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.
    function maxOcena($student)
    {
        $maxOcena = 0;
        foreach($student as $predmeti)
        {
            if($predmeti["ocena"] > $maxOcena)
            {
                $maxOcena = $predmeti["ocena"];
            }
        }
        return $maxOcena;
    }


    echo "<p>Maksimalna ocena koju je student dobio tokom studija je " . maxOcena($student1). "</p>";

    // 5. Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

    function studentGeneracije($student)
    {
        $br10 = 0;
        $br9 = 0;
        foreach($student as $predmeti)
        {
            if($predmeti["ocena"] == 9)
            {
                $br9++;
            }
            elseif($predmeti["ocena"] == 10)
            {
                $br10++;
            }
            else
            {
                return false;
            }
        }
        if($br10 >= $br9)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    echo "<p>Student je student generacije: " .(studentGeneracije($student1) ? "Jeste" : "Nije") . "</p>";

    // Takođe, napisati i sledeće funkcije, za koje se kao parametar prenosi niz položenih ispita.
    // 8. Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja ispisuje predmete koje je polagao date godine.

    function predmetiPolozeniG($student, $godina)
    {
        foreach($student as $predmeti)
        {
            $godinaPolaganja = (int)substr($predmeti["datum"], 0, 4);
            if($godinaPolaganja == $godina)
            {
                echo $predmeti["naziv"];
            }
        }
    
    }

    $dataGodina = 2021;
    echo "<p>Student je godine $dataGodina polozio predmete: ". predmetiPolozeniG($student1, $dataGodina) . "</p>";

    // 9. Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja vraća prosečnu ocenu studenta na ispitima koje je polagao date godine. 

    function prosecnaOcenaGodine($student, $godina)
    {
        $sumaOcena = 0;
        $brPredmeta = 0;
        foreach($student as $predmeti)
        {
            $godinaPolaganja = (int)substr($predmeti["datum"], 0, 4);
            if($godinaPolaganja == $godina)
            {
                $sumaOcena += $predmeti["ocena"];
                $brPredmeta++;
            }
        }
        if($brPredmeta == 0)
        {
            return 0;
        }
        
        return $sumaOcena / $brPredmeta;
    }

    echo "<p>Prosecna ocena studenta, polozenih predmeta, godine $dataGodina je: ". prosecnaOcenaGodine($student1,$dataGodina) . "</p>";
    // 10. Napisati funkciju koja vraća naziv predmeta na kojem je student dobio maksimalnu ocenu. Ukoliko ima više ovakvih predmeta, vratiti onaj koji je najskorije položio.

    function predmetNajvecaOcena($student)
    {
        $maxOcena = maxOcena($student);
        $maxTime = 0;
        $rezultat = "";
        foreach($student as $predmeti)
        {
            if($predmeti["ocena"] == $maxOcena && strtotime($predmeti["datum"]) >= $maxTime )
            {
                $maxTime = strtotime($predmeti["datum"]);
                $rezultat = $predmeti["naziv"];
            }
        }
        return $rezultat;
    }

    echo "<p>Student je dobio zadnju maksimalnu ocenu  iz predmeta: ". predmetNajvecaOcena($student1) . "</p>";

    // 11. Napisati funkciju kojoj se prosleđuje i neki string kao dodatni parametar, kao i dva cela broja, a koja vraća broj ispita koje je student položio, a čiji naziv predmeta sadrži dati string, kao i da se ocena nalazi između zadata dva broja.
    
    function brIspitaPredmetaOcene($student, $stringSadr, $od, $do)
    {
        $brIspita = 0;
        foreach($student as $predmeti)
        {
            if(strpos($predmeti["naziv"], $stringSadr) !== false && $predmeti["ocena"] >= $od && $predmeti["ocena"] <= $do)
            {

                $brIspita++;
            }
        }
        return $brIspita;
    }

    $stringSadr = "soc";
    $br1 = 8;
    $br2 = 10;
    echo "<p>Broj ispita koje je student polozio a sadrze string $stringSadr , i ocena polozenog ispita je izmedju $br1 i $br2 je: ". brIspitaPredmetaOcene($student1, $stringSadr, $br1 ,$br2). "</p>";





?>