<?php

    require_once "zaposleni.php";

    $osoba1 = new Osoba("Dejan","Kolarski", 1998);
    $osoba1->ispisOsoba();

    $zaposleni1 = new Zaposleni("Dunja","Kolarski",1996, 50000, "grommer");
    $zaposleni1->ispisOsoba();
    $zaposleni1->ispisZaposleni();

    $zaposleni2 = new Zaposleni("Marija", "Kolarski", 1967, 80000, "ekonomista");
    $zaposleni2->ispisZaposleni();

    $zaposleni3 = new Zaposleni("Dejan", "Popovic", 1994, 100000, "ekonomista");
    $zaposleni3->ispisZaposleni();

    $nizZaposlenih = [$zaposleni1,$zaposleni2, $zaposleni3];
    function prosekPlate($niz)
    {
        $sum = 0;
        foreach($niz as $zaposleni)
        {
            $plata = $zaposleni->getPlata();
            $sum += $plata;
        }
        $n = count($niz);
        return  ($n > 0) ? ($sum / $n) : 0; // ako je nula vrati 0
    }

    echo "<p>Prosek plata je: ". prosekPlate($nizZaposlenih) . "</p>";

    function natprosecnaPlata($zaposleni, $niz)
    {
        $prosecnaPlata = prosekPlate($niz);
        $plata = $zaposleni->getPlata();
        if($plata > $prosecnaPlata)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    echo "<p>Zaposleni ima natprosecnu platu: " . (natprosecnaPlata($zaposleni3,$nizZaposlenih) ?  "Da" : "Ne") . "</p>";

    require_once "kosarkas.php";

    $kosarkas1 = new Kosarkas("Dejan", "Popovic", 1994, "Novi Sad", [50,30,20,35]);
    $kosarkas1->ispisKosarkas();

    $kosarkas2 = new Kosarkas("Bora", "Popovic", 1992, "Novi Sad", [30,20,35]);
    $nizKosarkasa = [$kosarkas1, $kosarkas2];
    function najviseUtakmica($niz)
    {
        $najvecibrUtakmica = 0;
        foreach($niz as $kosarkas)
        {
            $brUtakmica = count($kosarkas->getPoeni());
            if($najvecibrUtakmica < $brUtakmica)
            {
                $najvecibrUtakmica = $brUtakmica;
                $kosarkasSaNajvise = $kosarkas;
            }
        }
        return $kosarkasSaNajvise;
    }

    echo "<p>Kosarkas sa najvise utakmica je: ";
    najviseUtakmica($nizKosarkasa)->ispisKosarkas();
    echo "</p>";





?>