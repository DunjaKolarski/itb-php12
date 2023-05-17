<?php

    $godine = array (
        "Pera" => 28, // pera je kljuc vrednost je 28 ,da smo stavili "28" posmatralo bi se kao string a ne broj 
        "Lazar" => 26,
        "Violeta" => 35,
        "Marko" => 35
    );
    // ne mogu dva elementa da imaju isti kljuc kao kod obicnih nizova sto ne mogu dva elementa da imaju isti indeks 
    echo $godine["Pera"];
    echo $godine["Violeta"];

    // greska je kada trazimo kljuc koji ne postoji
    // naknadno dodavanje elemnta i kljuca njegovog

    $godine["x"] = 48;
    echo $godine["x"];

    // ovakvo kreiranje niza je isto moguce, dodavanje elemenata praznom nizu

    $godine = array();
    $godine["Pera"] = 28;
    $godine["Lazar"] = 26;
    $godine["Violeta"] = 35;
    $godine["Marko"] = 35;

    $godine["x"] = 48;
    echo $godine["x"];

    var_dump($godine);


    // za asocijativne nizove ne mozemo for pretljom vec nam treba foreach petlja u njoj kada je koristimo za indeksne nizove ne mozemo da prekacemo neke elementa sa npr $i*=2  kao kod for petlje vec se uvek prolazi kroz sve elemente niza
    // u foreachu nema usluva vec sluzi za prolazak kroz niz i hvata nam kljuceve i vrednosti elementa 

    echo "<br>";

    foreach ($godine as $i => $g) // $i pred kljuc elementa  a $g vrednost elemeta ,sami biramo kako zelimo da ih nazovemo
    {
        echo "<p>Osoba $i ima $g godina.</p>";
    }

    foreach ($godine as $key => $value) // najcesce se ovako nazivaju
    {
        echo "<p>Osoba $key ima $value godina.</p>";
    }

    // mogu da se dohvate i samo vrednosti !!!!
    foreach ($godine as $g)
    {
        echo "<p>Osoba ima $g godina.</p>";
    }

    // dakle foreach petlja moze da se koristi i za indeksne nizove
    $brojevi = [5, -6, 3.3, 17.8, 0];
    $brojevi[100] = 50;

    $brojevi[2] = 4; // ako  u nizu postoji vec element sa tim indeksom ili kljucem promenicemo mu vrednost!!!!!!!!!

    foreach ($brojevi as $broj) // dobro je imenovati kljuc i vrednost sa onim sto ima smisla lakse se prati zadatak od key value
    {
        echo "$broj &nbsp;"; //&nbsp; no breaking space
    }

    foreach ($brojevi as $indeks => $broj)
    {
        echo "<p>Element sa indeksom $indeks ima vrednost $broj.</p>";
    }

    // foreach ide kroz elemente niza ne kroz indekse tako da npr element vrednosti 50 ima indeks 100 i on ce biti ispisan odmah nakon elementa vrednosti 0 sa indeksom 5


    // Zadatak 1
    
    $automobili = [
        "Audi A3" => 2004,
        "Opel Corsa"=> 1999,
        "Opel Astra" => 2016,
        "Peugeot 208" => 2004,
        "Ford Focus" => 2015
    ];

    // Ispisati sve automobile, kao i njihova godista
    foreach ($automobili as $marka => $godiste)
    {
        echo "<p>Automobil $marka proizveden $godiste. godine.</p>";
    }

    // Ispisati automobile koji su stariji od 10 godina
    // trenutnu godinu trazimo date funkcijom
    $trenutnaGodina = date("Y");
    foreach ($automobili as $marka => $godiste)
    {
        if ($trenutnaGodina - $godiste > 10)
        {
            echo "<p>Automobil $marka je stariji od 10 godina.</p>";
        }
    }

    // Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine
    // strpos ili strcontain

    foreach ($automobili as $marka => $godiste)
    {
        if (strpos($marka, "Opel") !== false && $godiste >= 2000) /// specificno !== false strpos ovo preci !!!!! ne moze === true!! ?? strpos vraca poziciju pa zbog toga ?
        {
            echo "<p>Automobil $marka je proizveden posle 2000. godine.</p>";
        }
    }

    // Zadatak 2 
    // Dat je niz elemenata u obliku ImeOsobe/Visina
    $osobe = [
        "Dunja" => 160,
        "Dejan" => 190,
        "Pera" => 190,
        "Marija" => 170,
        "Vladimir" => 160
    ];
    // Ispisati sve osobe sa njihovim visinama
    // Ispisati sve natprosečno visoke osobe
    $sumaVisina = 0;
    $brojOsoba = count($osobe);
    foreach ($osobe as $imeOsobe => $visina)
    {
        echo "<p>Ime osobe: $imeOsobe Visina: $visina.</p>";
        $sumaVisina += $visina;
    }

    $srednjaVrednostVisine = $sumaVisina / $brojOsoba;

    foreach ($osobe as $imeOsobe => $visina)
    {
        if ($visina > $srednjaVrednostVisine)
        {
            echo "<p>Natprosecno visoka osoba je $imeOsobe.</p>";
        }
    }

    // Ispisati sve osobe koje imaju mak ?? ovo moram preci 
    $max = 0; //mozemo nulu da stavimo !!!!!!!!!!!!!!!!!!!!! jer su visine i bice sve pozitivne vrednosti jer ne znamo kljuc prve osobe napamet
    $max = PHP_INT_MIN; // kao minus infiniti broj univerzalnije je od 0
    // mora u dve petlje
    foreach ($osobe as $visina)
    {
        if($visina > $max)
        {
            $max = $visina;
        }
    }
    foreach ($osobe as $imeOsobe => $visina)
    {
        if($visina == $max)
        {
            echo "<p>Osoba $imeOsobe ima maksimalnu visinu.</p>";
        }
    }


    // Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'

    foreach ($osobe as $imeOsobe => $visina)
    {
        if ($visina < $srednjaVrednostVisine && $imeOsobe[0] == "V") // moze startwith ugr funk
        // svaki string se cita ovde kao niz i na ovaj nacin gledamo da li u tom nizu prvi element tj prvo slovo jeste V
        {
            echo "<p>Ime osobe cije ime pocinje slovom 'V' sa visinom ispod proseka je: $imeOsobe</p>";
        }
    }

    // Zadatak 3
    // Dat je niz elemenata u obliku NazivPredmeta/Ocena koju student ima.
    // Ispisati sve predmete i ocene studenta.


    
?>