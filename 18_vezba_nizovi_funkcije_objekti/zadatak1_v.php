<?php
    // ZADATAK 1. (NIZOVI BROJEVA) STEFANI STAVILA U KODOVE SA CASA
    // Dat je niz celih brojeva u kojima se čuvaju ocene jednog studenta koje je dobio polagajući različite ispite.
    //  1. Kreirati niz po uslovima zadatka od barem pet elemenata.
    // Za sve funkcije iz ovog zadatka, kao parametar se prenosi niz ocena.

    $student1 = [10, 9, 9, 10, 10, 10];


    // 2. Napisati funkciju koja vraća prosečnu ocenu studenta.

    function prosecnaOcena($ocene)
    {
        $sum = 0;
        for($i = 0; $i < count($ocene); $i++)
        {
            $sum += $ocene[$i];
        }
        $prosecna = $sum/count($ocene);
        return $prosecna;
    }

    echo "<p>Prosecna ocena studenta je: " . prosecnaOcena($student1) . "</p>";

    // 3. Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

    function maksOcena($ocene) // mora i trenutni!!!!!!!!!!!!!!!!!
    {
        $maks = $ocene[0];
        for($i = 1; $i < count($ocene); $i++)
        {
            $trenutni = $ocene[$i];
            if($trenutni > $maks)
            {
                $maks = $trenutni;
            }
        }
        return $maks;
    }

    echo "<p>Maksimalna ocena studenta je: " . maksOcena($student1) . "</p>";

    // 4. Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.

    function brPredmetaMaksOcena($ocene)
    {
        $maksOcena = maksOcena($ocene);
        $brPredmeta = 0;
        for($i = 1; $i < count($ocene); $i++)
        {
            if($ocene[$i] == $maksOcena)
            {
                $brPredmeta++;
            }
        }
        return $brPredmeta;
    }

    
    echo "<p>Broj predmeta sa maksimalnom ocenom  je: " . brPredmetaMaksOcena($student1) . "</p>";

    // 5. Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

    function studentGeneracije($ocene)
    {
        $br10 = 0;
        $br9 = 0;
        for($i = 0; $i < count($ocene); $i++)
        {
            if($ocene[$i] == 10)
            {
                $br10++;
            }
            elseif($ocene[$i] == 9)
            {
                $br9++;
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

    echo "<p>Student je kandidat za studenta generacije: " . (studentGeneracije($student1) ? "Jeste" : "Nije") . "</p>";

    // 6. Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 
    // Na primer, za niz [10, 10, 9, 10, 10, 10, 8, 9, 9, 9, 9, 10, 10, 10], funckija treba da vrati 3.
    // Na primer, za niz [6, 8, 6, 6, 6, 7, 7, 9, 7, 7, 7, 7], funkcija treba da vrati 1.

    function maksPodniz($ocene)
    {
        $maksOcena = maksOcena($ocene);
        $maksDuzinaNiza = 0;
        $trenutnaDuzina = 0;
        for($i = 0; $i < count($ocene); $i++)
        {
            if($ocene[$i] == $maksOcena)
            {
                $trenutnaDuzina++;
                if($trenutnaDuzina > $maksDuzinaNiza)
                {
                    $maksDuzinaNiza = $trenutnaDuzina;
                }
            }
            else
            {
                $trenutnaDuzina = 0;
            }
            
        }

        return $maksDuzinaNiza;
    }

    echo "<p>Maksimalna duzina niza sa maksimalnim ocenama studenta je: " . maksPodniz($student1) . "</p>";
?>