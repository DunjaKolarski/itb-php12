<?php
    // ZADATAK. Sa niškog aerodroma u toku jednog dana polaze letovi ka različitim gradovima. Dat je asocijativni niz u kojem su ključevi destinacije letova, a vrednosti broj putnika na svakom letu.

    // 1. Kreirati niz $letovi po uslovima zadatka.

    $letovi = [
        "Beograd" => 50,
        "Budimpesta" => 100,
        "Bec" => 120,
        "Hurgada" => 40,
        "Kairo" => 60,
        "Pariz" => 200,
        "London" => 130,
        "Lisabon" => 300,
        "Njujork" => 250,
        "Banja Luka" => 300
    ];

    // 2. Napisati funkciju maxBrojPutnika($letovi) kojoj se prosleđuje niz letova, a funkcija vraća maksimalan broj putnika na nekom od letova.

    function maxBrojPutnika($letovi)
    {
        $maks = 0;
        // foreach ($letovi as $des => $br) moze i samo velju tj $br ali samo kljuc tj $des ne moze !!!!!!
        foreach ($letovi as $br)
        {
            
            if ($br > $maks)
            {
                $maks = $br;
            }

        }
        return $maks;
    }

    echo "Maksimalan broj putnika je :" . maxBrojPutnika($letovi);
    echo "<hr>";



    // 3. Napisati funkciju brojMax($letovi) kojoj se prosleđuje niz letova, a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.


    function brojMax($letovi)
    {
        $maksPutnika =  maxBrojPutnika($letovi);
        $brLetova = 0;
        foreach ($letovi as $br) 
        {
            if ($br == $maksPutnika)
            {
                $brLetova++;
            }
        }
        
        return $brLetova;
    }
    brojMax($letovi);

    echo "Broj destinacija sa maksimalnim brojem putnika je :" . brojMax($letovi);
    echo "<hr>";

    // 4. Napisati funkciju prosek($letovi) kojoj se prosleđuje niz letova, a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.
    function prosek($letovi)
    {
        $ukupanBrPutnika = 0;
        foreach ($letovi as $br)
        {
            $ukupanBrPutnika += $br;
        }
        return  $ukupanBrPutnika / count($letovi);
        // moze i da se zaokruzuje return round ($ukupanBrPutnika / $brLetova); da bi imali ako je zarez koliko ljudi a ne sa zarezom
    }
   
    echo "Prosecan broj putnika na letovima je :" . prosek($letovi);
    echo "<hr>";

    // 5. Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. Napisati funkciju isplativ($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).
    function isplativ ($letovi, $granica)
    {
        $iznad = 0;
        $ispod = 0;
        foreach ($letovi as $br)
        {
            if ($br >= $granica)
            {
                $iznad++;
            }
            else
            {
                $ispod++;
            }
        }
        if ($iznad >= $ispod)
        {
            //echo "t";
            return TRUE;
        }
        else
        {
            //echo "f";
            return FALSE;
        }

    }
    echo "Dan je bio isplativ za granicu 100 :" .(isplativ($letovi,100) ? "JESTE" : "NIJE");
    echo "<hr>";
    // moze i ovako 
    // echo "Dan je bio isplativ za granicu 100: ";
    // if (isplativ($letovi, 100))
    // {
    //     echo "JESTE";
    // }
    // else
    // {
    //     echo "NIJE";
    // }
    // echo "<hr>";

    // 6. Dan je alarmantan za niški aerodrom ukoliko postoji neki let u kojem je broj putnika bio manji od zadate granice. Napisati funkciju alarmantan($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio alarmantan (vraća true ukoliko je postojao let u kojem je broj putnika bio manji od granice, i false ako nije).

    function alarmantan ($letovi, $granica)
    {
        foreach ($letovi as $br)
        {
            if($br < $granica)
            { 
                return TRUE;
            }
        }
        return FALSE;
    }
    echo "Dan je bio alarmantan za granicu 100: " .(alarmantan($letovi,100) ? "JESTE" : "NIJE");// ovo mora u zagradu!!!!!!!!!!!!!!!!! da bi se prvo izvrsilo
    echo "<hr>";

    // 7. Napisati funkciju dobreDestinacije($letovi) kojoj se prosleđuje niz letova, a funkcija ispisuje letove sa natprosečnim brojem putnika.

    function dobreDestinacije($letovi)
    {
        $prosek = prosek($letovi);
        foreach ($letovi as $des => $br)
        {
            if ($br >= $prosek)
            {
                echo "<p>$des</p>";
            }

        }

    }

    echo "Dobre destinacije su ";
    dobreDestinacije($letovi);
    echo "<hr>";

    // return nam je bitan jer bez njega ne mozemo kasnije da koristimo funkciju u drugoj!!!!!


    // ZADATAK. Dat je niz u kojem su smešteni odgovarajući letovi koji polaze sa nekog aerodroma u toku jednog dana. Svaki element tog niza odgovara jednom letu, pri čemu se za svaki let pamti destinacija (grad u koji avion sleće), država u kojoj se taj grad nalazi, kao i vreme poletanja aviona sa aerodroma (string u formatu “hh:mm”). U ovom zadatku, može se desiti da imamo više letova ka istoj destinaciji.
    $letovi = [
        ["dest" => "Beograd", "country" => "Srbija", "time" => "05:20"],
        ["dest" => "Zagreb", "country" => "Hrvatska", "time" => "23:00"],
        ["dest" => "Zagreb", "country" => "Hrvatska", "time" => "00:00"],
        ["dest" => "Pariz", "country" => "Francuska", "time" => "20:00"],
        ["dest" => "Pariz", "country" => "Francuska", "time" => "03:00"],
        ["dest" => "Dubrovnik", "country" => "Hrvatska", "time" => "21:00"],
        ["dest" => "Beograd", "country" => "Srbija", "time" => "04:20"]
    ];


    // 8. Kreirati niz $letovi, pri čemu je svaki element tog niza jedan asocijativni niz. Svaki od tih asocijativnih niza mora od ključeva da ima “dest” (destinaciju), “country” (zemlju te destinacije), kao i “time” (vreme sletanja).


    // 9. Napisati funkciju brojLetovaZaZemlju($letovi, $zemlja) kojoj se prosleđuju niz letova, kao i zemlja, a funkcija vraća broj letova do date zemlje.

    function brojLetovaZaZemlju ($letovi, $zemlja)
    {

        $brLetovaDoDateZemlje = 0;
        foreach ($letovi as $let)
        {
            if ($zemlja == $let["country"])
            {
                $brLetovaDoDateZemlje++;
            }
        }
        return $brLetovaDoDateZemlje;
    }
    echo "Broj letova do zadate zemlje je : ";
    echo brojLetovaZaZemlju($letovi,"Srbija");
    echo "<hr>";

    // 10. Napisati funkciju visePrePodne($letovi) kojoj se prosleđuje niz letova, a određuje da li je bilo više letova pre podne ili posle podne. Ukoliko je bilo više letova pre podne, vratiti true, a u suportnom, vratiti false.

    function visePrePodne ($letovi)
    {
        $prePodneLetovi = 0;
        foreach ($letovi as $let)
        {
            $vreme = $let["time"];
            if ($vreme < "12:00")
            {
                $prePodneLetovi++;
            }
        }
        if ($prePodneLetovi > count($letovi)/2 )
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    echo "Vecina letova je bila pre podne : " . (visePrePodne($letovi) ? "JESTE" : "NIJE");
    echo "<hr>";

    // 11. Napisati funkciju ispisLetovaDoSada($letovi) kojoj se prosleđuje niz letova, kao i zemlja, a koja ispisuje sve letove koji su poleteli do trenutnog vremena.
    function ispisLetovaDoSada ($letovi, $zemlja)
    {
        date_default_timezone_set('Europe/Belgrade');
        $trenutnoVreme = date("H:i:s");
        foreach ($letovi as $let)
        {
            if ($zemlja == $let["country"] && $let["time"] < $trenutnoVreme)
            {
                echo "<p>". $let["country"] . " polazak je bio u " . $let["time"] . "</p>";
            }
        }
    }

    echo "Letovi koji su poleteli do trenutnog vremena su : ";
    echo ispisLetovaDoSada($letovi, "Hrvatska");
    echo "<hr>";


    // 12. Neke zemlje su označene kao crvene, jer je u njima nepovoljna epidemiološka situacija. Napisati funkciju rizicniLetovi($letovi, $crvenaZona) kojoj se prosleđuju niz letova, kao i niz zemlja, a koja ispisuje u paragrafima čiji je tekst obojen crvenom bojom, a u svakom paragrafu ispisati informacije o onim letovima koji kao destinaciju imaju zemlju iz crvene zone.
    function rizicniLetovi ($letovi, $crvenaZona)
    {
        foreach ($letovi as $let)
        {
            foreach ($crvenaZona as $zemljeCrvene)
            {
                if ($let["country"] == $zemljeCrvene)
                {
                    echo "<p style='color:red;'>" .  $let["dest"] . ", " . $let["country"] . ", " . $let["time"] . "</p>";
                }
            }
        }
    }
    $crvenaZona = ["Srbija", "Hrvatska"];
    echo "Rizicni letovi zbog epi situacije su: ";
    echo rizicniLetovi($letovi, $crvenaZona);
    echo "<hr>";


    // 13. Neka destinacija je tražena ukoliko postoji više letova u toku dana za tu destinaciju. Napisati funkciju trazeneDestinacije($letovi) kojoj se prosleđuje niz letova, a koja ispisuje sve tražene destinacije (ukoliko postoje).
    function trazeneDestinacije ($letovi)
    {
        $polasci = [];
        foreach ($letovi as $let)
        {
            $destinacija = $let["dest"];//npr zagreb
            $postojiLet = false;
            foreach ($polasci as $d => $br)
            {
                if ($d == $destinacija)
                {
                    $postojiLet = true;
                    $polasci[$destinacija]++;
                }
            }
            if ($postojiLet == false)
            {
                $polasci[$destinacija] = 1;
            }

        }
        foreach ($polasci as $d => $br)
        {
            if ($br > 1)
            {
                echo "<p>$d je trazena destinacija</p>";
            }
        }
        
    }
    // function trazeneDestinacije ($letovi)
    // {
    //     $polasci = [];
    //     foreach ($letovi as $let) 
    //     {
    //         if (!isset($polasci[$let["dest"]])) 
    //         {   
    //             $polasci[$let["dest"]] = 0;
    //         }
    //         $polasci[$let["dest"]];
    //     }
    //     foreach ($polasci as $d => $br)
    //     {
    //         if ($br > 1)
    //         {
    //             echo "<p>$d je trazena destinacija</p>";
    //         }
    //     }
    // }

    echo trazeneDestinacije ($letovi);
    echo "<hr>";


    // 14. Napisati funkciju prosecanBrojLetovaZaZemlju($letovi) kojoj se prosleđuje niz letova, a koja vraća prosečan broj letova ka nekoj zemlji.
    
    

    // ZADATAK. Formirati asocijativni niz koji od ključeva i vrednosti sadrži:
    // Datum (string u formatu YYYY/MM/DD),
    // Kiša (true/false),
    // Sunce (true/false),
    // Oblačno (true/false),
    // Vrednosti temperature (Niz temperatura tog dana).

    // 15. Napisati funkciju koja određuje i vraća prosečnu temperaturu izmerenu tog dana.

    $dan = [
        "datum" => "2023/05/16",
        "kisa" => true,
        "sunce" => true,
        "oblacno" => false,
        "temperature" => [5, 8, 13, 17, 12, 9, 6]
    ];

    function prosecnaTemp($dan)
    {
        $temperature = $dan["temperature"];
        $suma = 0;
        foreach ($temperature as  $temp)
        {
            $suma += $temp;
        }
        $prosek = $suma / count($temperature);
        return $prosek;
    }
    echo "Prosecna temperatura za dan " . $dan["datum"] . " je " . prosecnaTemp($dan);
    echo "<hr>";
    // 16. Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa natprosečnom temperaturom.

    function brMerenja($dan)
    {
        $brMerenjaSaNatp = 0;
        $prosecnaTemp = prosecnaTemp($dan);
        $tempM = $dan["temperature"];
        foreach ($tempM as $temm)
        {
            if ($temm > $prosecnaTemp)
            {
                $brMerenjaSaNatp++;
            }
        }
        return $brMerenjaSaNatp;
    }
    echo "Broj merenja sa natprosecnom temperaturom za dan " . $dan["datum"] . " je " . brMerenja($dan);
    echo "<hr>";

    // 17. Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa maksimalnom temperaturom.
    function brMerenjaSaMaks ($dan)
    {
        $maksTemp = 0;
        $temperature = $dan["temperature"];
        $brTempSaMaks = 0;
        foreach ($temperature as $tempM)
        {
            if ($tempM > $maksTemp)
            {
                $maksTemp = $tempM;
            }
        }
        foreach ($temperature as $tempM)
        {
            if ($tempM == $maksTemp)
            {
                $brTempSaMaks++;
            }
        }
        
        return $brTempSaMaks;
    }
    echo "<p>Broj merenja sa maksimalnom temperaturom u danu " . $dan["datum"] . " je </p>";
    echo brMerenjaSaMaks($dan);
    echo "<hr>";

    // 18. Napisati funkciju koja prima dva parametra koji predstavljaju dve temperature. Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost između ove dve zadate temperature (ne uključujući te dve vrednosti).
    function brMerenjaIzmedjuTemp ($dan, $temp1, $temp2)
    {
        $temperature = $dan["temperature"];
        $brTemperaturaIzmedju = 0;
        foreach ($temperature as $temperatura)
        {
            if ($temperatura > $temp1 && $temperatura < $temp2)
            {
                $brTemperaturaIzmedju++;
            }
        }
        return $brTemperaturaIzmedju;
    }
    echo "<p>Broj merenja sa izmedju temeratura u danu " . $dan["datum"] . " je </p>";
    echo brMerenjaIzmedjuTemp($dan, 5, 15);
    echo "<hr>";

    
    // 19. Napisati funkciju koja vraća true ukoliko je u većini dana temperatura bila iznad proseka. U suprotnom vraća false. 

    function tempIznadProsekaVeciniDana ($dan)
    {
        $prosekTemp = prosecnaTemp($dan);
        $vremeSaTempIznadP = 0;
        $temperature = $dan["temperature"];
        foreach ($temperature as $temperatura)
        {
            if ($temperatura > $prosekTemp)
            {
                $vremeSaTempIznadP++;
            }
        }
        if ($vremeSaTempIznadP > count($temperature)/2 )
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    echo "<p> Da li je u vecini dana temperatura bila iznad proseka " . (tempIznadProsekaVeciniDana($dan) ? "JESTE" : "NIJE") .  "</p>";
    echo "<hr>";

    // 20. Napisati funkciju koja za dan se smatra da je leden ukoliko nijedna temperatura izmerena tog dana nije iznosila iznad 0 stepeni. Metod vraća true ukoliko je dan bio leden, u suprotnom metod vraća false.

    function daLiJeDanLeden ($dan)
    {
        $temperature = $dan["temperature"];
        foreach ($temperature as $temperatura)
        {
            if ($temperatura > 0)
            {
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }
    }

    echo "<p> Da li je dan bio leden : " . (daLiJeDanLeden($dan) ? "JESTE" : "NIJE") .  "</p>";
    echo "<hr>";
   
    // 21. Za dan se smatra da je tropski ukoliko nijedna temperatura izmerena tog dana nije iznosila ispod 24 stepena. Napisati funkciju tropski($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio tropski, u suprotnom vraća false.
    // 22. Dan je nepovoljan ako je razlika između neka dva uzastopna merenja veća od 8 stepeni. Napisati funkciju nepovoljan($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio nepovoljan, u suprotnom vraća false.
    // 23. Za dan se kaže da je neuobičajen ako je bilo kiše i ispod -5 stepeni, ili bilo oblačno i iznad 25 stepeni, ili je bilo i kišovito i oblačno i sunčano. Napisati funkciju neuobicajen($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio neuobičajen, u suprotnom vraća false.



    // ZADATAK. Dat je niz u kojem su smešteni podaci o blogovima nekog korisnika. Svaki element tog niza odgovara jednom blogu, pri čemu se za svaki blog pamti naslov, broj lajkova, kao i broj dislajkova.
    // 24. Kreirati niz $blogovi, pri čemu je svaki element tog niza jedan asocijativni niz. Svaki od tih asocijativnih niza mora od ključeva da ima “title” (naslov), “likes” (broj lajkova), kao i “dislikes” (broj dislajkova).

    $blogovi = [
        ["title"=> "Putovnje", "likes" => 3000, "dislikes" => 1600],
        ["title"=> "Ljubav", "likes" => 1000, "dislikes" => 5000],
        ["title"=> "Psi", "likes" => 5000, "dislikes" => 10]
    ];


    // 25. Napisati funkciju kojoj se prosleđuje $blogovi, a ona vraća ukupan broj lajkova.
    function ukupanBrLajkova ($blogovi)
    {
        $ukupanBrLajkova = 0;
        foreach($blogovi as $blog)
        {
            $ukupanBrLajkova += $blog["likes"];
        }
        return $ukupanBrLajkova;
    }
    echo "<p>Ukupan broj lajkova svih blogova je </p>";
    echo ukupanBrLajkova($blogovi);
    echo "<hr>";
    // 26. Napisati funkciju kojoj se prosleđuje $blogovi, a ona vraća prosečan broj lajkova.

    function prosecanBrLajkova ($blogovi)
    {
        $prosecanBrLajkova = ukupanBrLajkova($blogovi) / count($blogovi);
        return $prosecanBrLajkova;
    }
    echo "<p>Prosecan broj lajkova  blogova je </p>";
    echo prosecanBrLajkova($blogovi);
    echo "<hr>";
    // 27. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji imaju više lajkova nego dislajkova.

    function blogoviSaViseLajkovaNegoDis ($blogovi)
    {
        foreach ($blogovi as $blog)
        {
            if ($blog["likes"] > $blog["dislikes"])
            {
                echo "<p>Blog sa vise lajkova nego dislajkova je </p>" . $blog["title"];
            }
        }
    }
    blogoviSaViseLajkovaNegoDis($blogovi);
    echo "<hr>";
    // 28. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji imaju najmanje duplo više lajkova nego dislajkova.

    function blogoviSaNajmanjDuploViseLajkovaNegoDis ($blogovi)
    {
        foreach ($blogovi as $blog)
        {
            if (($blog["likes"]/2) > $blog["dislikes"])
            {
                echo "<p>Blog sa najmanje duplo vise lajkova nego dislajkova je </p>" . $blog["title"];
            }
        }
    }
    blogoviSaNajmanjDuploViseLajkovaNegoDis($blogovi);
    echo "<hr>";
    // 29. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji se završavaju uzvičnikom.
    // 30. Napisati funkciju kojoj se prosleđuje $blogovi kao i $granica, a ona vraća broj blogova čiji je broj lajkova veći od granice.
    // 31. Napisati funkciju kojoj se prosleđuje $blogovi kao i $rec, a ona vraća prosečan broj lajkova za one blogove koji u naslovu sadrže prosleđenu reč.
    // 32. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje blogove koji imaju iznadprosečan broj lakova.
    // 33. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje blogove koji imaju ispodprosečan broj dislakova.


?>

