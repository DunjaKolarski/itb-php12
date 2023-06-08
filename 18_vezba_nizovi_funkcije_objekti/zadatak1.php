<?php
    // ZADATAK 1. (NIZOVI BROJEVA) STEFANI STAVILA U KODOVE SA CASA
    // Dat je niz celih brojeva u kojima se čuvaju ocene jednog studenta koje je dobio polagajući različite ispite.
    //  1. Kreirati niz po uslovima zadatka od barem pet elemenata.
    // Za sve funkcije iz ovog zadatka, kao parametar se prenosi niz ocena.

     
    $ocene = [10, 10, 9, 9, 9, 10];

    // 2. Napisati funkciju koja vraća prosečnu ocenu studenta.

    function prosecnaOcena($ocene)
    {
        $sum = 0;
        $count = 0;
        foreach($ocene as $ocena)
        {
            $sum += $ocena;
            $count++;
        }
        return $sum / $count;
    }
    echo "<p>Prosecna ocena je : " . prosecnaOcena($ocene). "</p>";

    // 3. Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

    function maxOcena($ocene)
    {
        $max = 0; // bolje da max ocena bude prvi indeks iz niza i radim for petljom ne foreace
        foreach($ocene as $ocena)
        {
            if($ocena > $max)
            {
                $max = $ocena;
            }
        }
        return $max;
    }
    echo "<p>Maksimalna ocena je : " . maxOcena($ocene). "</p>";

    // 4. Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.

    function brojPredmetaSaMaxOcenom($ocene)
    {
        $brojOcenaMax = 0;
        $maxOcena = maxOcena($ocene);
        foreach($ocene as $ocena) // for petljomne foreach
        {
            if($ocena == $maxOcena)
            {
                $brojOcenaMax++;
            }
        }
        return $brojOcenaMax;

    }
    echo "<p>Broj predmeta sa maksimalnom ocenom je : " . brojPredmetaSaMaxOcenom($ocene). "</p>";

    // 5. Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

    function studentGeneracije($ocene)
    {
        $br10 = 0;
        $br9 = 0;
        foreach($ocene as $ocena) // for petljom jer su numericki nizovi foreach je za asociajtivne
        { 
            if($ocena >= 9)
            {
                if($ocena == 10)
                {
                    $br10++;
                }
                elseif($ocena == 9)
                {
                    $br9++;
                }
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
    echo "<p>Student je student generacije:" .(studentGeneracije($ocene) ? "Jeste" : "Nije") . "</p>";

    // 6. Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 
    // Na primer, za niz [10, 10, 9, 10, 10, 10, 8, 9, 9, 9, 9, 10, 10, 10], funckija treba da vrati 3.
    // Na primer, za niz [6, 8, 6, 6, 6, 7, 7, 9, 7, 7, 7, 7], funkcija treba da vrati 1.

    function maxDuzinaMaxOcena($ocene)
    {
        $maxOcena = maxOcena($ocene);
        $tDuzina = 0;
        $maxDuzina = 0;
        foreach($ocene as $ocena) // sa for petljom 
        {
            if($ocena == $maxOcena)
            {
                $tDuzina++;
                if($tDuzina > $maxDuzina)
                {
                   $maxDuzina = $tDuzina;
                }
            }
            else
            {
                $tDuzina = 0;
            }
            
           
        }
        return $maxDuzina;
    }

    echo maxDuzinaMaxOcena($ocene);








?>