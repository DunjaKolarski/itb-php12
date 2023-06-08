<?php

require_once "Trougao.php";
require_once "Pravougaonik.php";
require_once "Kvadrat.php";
require_once "Romb.php";

//$o = new Oblik();
//$o->obim();   // sta je obim za Oblik???

//$t->setA(6);
$t = new Trougao(3, 4, 5);

$t->setA(60); // kada pozivamo bilo koju drugu metodu koja nije konstruktor,
            // OBJEKAT JE VEC KREIRAN (vec postoje sva polja za taj objekat!!!!)
            // (60, 4, 5)

//echo "<p>" . $t->obimTrougla() . ", " . $t->povrsinaTrougla() . "</p>";


$p = new Pravougaonik(5, 9);
//echo "<p>" . $p->obimPravougaonika() . ", " . $p->povrsinaPravougaonika() . "</p>";


$k = new Kvadrat(3);
//echo "<p>" . $k->obimKvadrata() . ", " . $k->povrsinaKvadrata() . "</p>";

$r = new Romb(6, 15);

$oblici = [$t, $p, $k, $r];

/*
foreach ($oblici as $oblik)
{
    // Sta je ovde $oblik? Da li je ovo Trougao, Kvadrat ili Pravougaonik?

    if ($oblik objekat klase Trougao)
    {
        echo "<p>" . $oblik->obimTrougla() . ", " . $oblik->povrsinaTrougla() . "</p>";
    }
    elseif ($oblik objekat klase Pravougaonik)
    {
        echo "<p>" . $oblik->obimPravougaonika() . ", " . $oblik->povrsinaPravougaonika() . "</p>";
    }
    elseif ($oblik objekat klase Kvadrat)
    {
        echo "<p>" . $oblik->obimKvadrata() . ", " . $oblik->povrsinaKvadrata() . "</p>";
    }
    else 
    {
        echo "<p>Nepodrzana figura</p>";
    }
}
*/

foreach ($oblici as $oblik)
{
    //echo "<p>" . $oblik->obim() . ", " . $oblik->povrsina() . "</p>";
    $oblik->ispis();
}
?>