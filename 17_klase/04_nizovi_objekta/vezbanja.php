<?php 

    // include "film.php"; - ako ne postoji fajl samo ignorisi
    // include_onde "film.php"; - ako ne postoji fajl samo ignorisi, ali kao je ovaj fajl vec ukljucen ranije onda ga ne ukljucuj ponovo
    // require "film.php"; - ako ne postoji fajl prijavljuje gresku
    // require_once "film.php"; - ako ne postoji fajl prijavljuje gresku, ali ako je ovaj fajl vec ukljucen onda ga ne ukljuci ponovo

    require_once "film.php"; //- kad ovako trazimo klase najbolje je koristiti require_once
    require_once "nemifilm.php";


    $f1 = new Film("Lord of teh Rings",2001,"Peter Jackson", [7, 5.8, 8.7, 10]);
    $f1->stampaj();

    $f2 = new Film("Kill Bill", 2003,"Quentin Tarantino", [10, 9.5, 9.8, 7.5]);
    $f2->stampaj();

    $f3 = new Film("Titanic", 1999,"James Cameron", [7.6, 5.5]);
    $f3->stampaj();

    $n1 = ["naslovi" => "LOTR", "godinaIzdanja" => 2001, "reziser" => "PJ"];
    $n2 = ["naslovi" => "Kill Bill", "godinaIzdanja" => 2003, "reziser" => "QT"];
    $n3 = ["naslovi" => "Titanic", "godinaIzdanja" => 1999, "reziser" => "JC"];
    // $filmoviTemp = [
    //     ["naslovi" => "LOTR", "godinaIzdanja" => 2001, "reziser" => "PJ"],
    //     ["naslovi" => "Kill Bill", "godinaIzdanja" => 2003, "reziser" => "QT"],
    //     ["naslovi" => "Titanic", "godinaIzdanja" => 1999, "reziser" => "JC"]
    // ] isto kao i  ovo dole ali ispravnije jer nema viska varijabli
    $filmoviTemp = [$n1, $n2, $n3];

    $filmovi = [$f1, $f2, $f3];

    foreach($filmovi as $film)
    {
        echo $film->getGodinaIzdanja();//moramo sa get jer je privatno polje
        $film->stampaj();
    }

    // ponoviti kako se koriste privatni kak o public za privatne koristimo setere i getere jer ne mozemo da im pristupimo van funkcije na drugi nacin 


    function prosecnaOcena($films)
    {
        $sum = 0;
        foreach($films as $f)
        {
            $prosecnaOcena = $f->prosek();
            $sum += $prosecnaOcena;
        }
        $n = count($films);
        return ($n > 0) ? ($sum / $n) : 0;
    }

    $prosecna = prosecnaOcena($filmovi);
    echo "<p>Prosecna ocena filmova jednaka je: $prosecna</p>";

    // napraviti funkciju vekFikmova kojoj se prosledjuje niz filmova i ceo broj funkcija ispisuje samo one filmoove koji su stvoreni u prosledjenom veku

    function vekFilmova($films, $vek)
    {
        foreach($films as $film)
        {

            $godinaIzdanja = $film->getGodinaIzdanja();
            $vekIzdanja = ceil($godinaIzdanja / 100);
            if($vekIzdanja == $vek)
            {
                $film->stampaj();
            }
        }
    }

    echo "<p>Filmovi koji su izasli u 21. veku:</p>";
    vekFilmova($filmovi, 21);

    // ako funkcija radi echo ne treba da bude unutar echo u ispisu nece lepo ispisati


    // Napraviti funkciju osrednjiFilm kojoj se prosleđuje niz filmova a ona vraća film koji je najbliži prosečnoj oceni svih filmova.

    function osrednjiFilm($niz)
    {
        $prosek = prosecnaOcena($niz);
        $najblizaVrednost = abs($niz[0]->prosek() - $prosek);// prvi predpostavimo da je najblizi, najbliza vredn na pocetku
        $najbliziFilm = $niz[0];
        foreach($niz as $film)
        {
            $vrednost = abs($film->prosek() - $prosek);
            if($vrednost < $najblizaVrednost)
            {
                $najblizaVrednost = $vrednost;
                $najbliziFilm = $film;
            }
        }
        return $najbliziFilm;
    }

    $osf = osrednjiFilm($filmovi);
    echo "<p>Film najblizi prosecnoj vrednosti je: </p>";
    $osf->stampaj();
    echo "<hr>";

    // Napraviti funkciju najboljeOcenjeni kojoj se prosleđuje niz filmova, a ona vraća najbolje ocenjeni film.

    function najboljeOcenjeni($niz)
    {
        $maxOcena = $niz[0]->prosek();
        $najboljeOcenjeni = $niz[0];
        foreach($niz as $film)
        {
            $ocena = $film->prosek();
            if($maxOcena < $ocena)
            {
                $maxOcena = $film->prosek();
                $najboljeOcenjeni = $film;
            }
        }
        return $najboljeOcenjeni;
    }

    $nf = najboljeOcenjeni($filmovi);
    echo "<p>Najbolje ocenjeni film je film : </p>";
    $nf->stampaj();
    echo "<hr>";


    // Napraviti funkciju najmanjaOcenaNajboljeg kojoj se prosleđuje niz filmova a ona određuje najbolji film i ispisuje njegovu najslabiju ocenu.

    function najmanjaOcenaNajboljeg($niz)
    {
        $najboljeOcenjenFilm = najboljeOcenjeni($niz);
        $sveOcene = $najboljeOcenjenFilm->getOcene(); //polja su privatna mogu samo preko getera da dohvatim ocene
        $minOcena = $sveOcene[0];
        foreach($sveOcene as $ocena)
        {
            if($ocena < $minOcena)
            {
                $minOcena = $ocena;
            }
        }
        return $minOcena;
    }
 
    $najmanjaOcenaNaj = najmanjaOcenaNajboljeg($filmovi);
    echo "<p>Najmanja ocena najboljeg ocenjenog filma je: $najmanjaOcenaNaj</p>";
    echo "<hr>";
    // kada se vrati broj ili string moze i ovako ali objekat ne moze preko echo vec mora preko metode npr ispisi


    // Napisati funkciju najmanjaOcena kojoj se prosleđuje niz filmova, a koja vraća koja je najmanja ocena koju je bilo koji film dobio.

    function najmanjaOcena($niz)
    {
        $ocenePrvogFilma = $niz[0]->getOcene(); // jer je privatno polje i jedino preko getera moze da se pristupi
        $minOcena = $ocenePrvogFilma[0];
        foreach($niz as $film)
        {
            $ocene = $film->getOcene();
            foreach($ocene as $o)
            {
                if($o < $minOcena)
                {
                    $minOcena = $o;
                }
            }
        }
        return $minOcena;
    }

    $mo = najmanjaOcena($filmovi);
    echo "<p>Najmanja ocena koju je neki film dobio je: $mo</p>";
    echo "<hr>";

    // Napisati funkciju najcescaOcena kojoj se prosleđuje niz ocena, a ona vraća ocenu koju su filmovi najčešće dobijali.
    

?>