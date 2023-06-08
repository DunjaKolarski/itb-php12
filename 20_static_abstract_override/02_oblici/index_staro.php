<?php

    require_once "trougao.php";
    require_once "kvadrat.php";
    require_once "pravougaonik.php";

    $t1 = new Trougao(4, 5, 9);
    echo "<p>Obim trougla je: ". $t1->obimTrougla() . "</p>";
    echo "<p>Povrsina trougla je: ". $t1->povrsinaTrougla() . "</p>";

    $t2 = new Trougao(10, 20, 5);
    echo "<p>Obim trougla je: ". $t2->obimTrougla() . "</p>";
    echo "<p>Povrsina trougla je: ". $t2->povrsinaTrougla() . "</p>";

    $t3 = new Trougao(16, 15, 26);
    echo "<p>Obim trougla je: ". $t3->obimTrougla() . "</p>";
    echo "<p>Povrsina trougla je: ". $t3->povrsinaTrougla() . "</p>";

    $k1 = new Kvadrat(4);
    echo "<p>Obim kvadrata je: ". $k1->obimKvadrata() . "</p>";
    echo "<p>Povrsina kvadrata je: ". $k1->povrsinaKvadrata() . "</p>";

    $k2 = new Kvadrat(10);
    echo "<p>Obim kvadrata je: ". $k2->obimKvadrata() . "</p>";
    echo "<p>Povrsina kvadrata je: ". $k2->povrsinaKvadrata() . "</p>";

    $k3 = new Kvadrat(16);
    echo "<p>Obim kvadrata je: ". $k3->obimKvadrata() . "</p>";
    echo "<p>Povrsina kvadrata je: ". $k3->povrsinaKvadrata() . "</p>";

    $p1 = new Pravougaonik(4, 3);
    echo "<p>Obim kvadrata je: ". $p1->obimPravougaonika() . "</p>";
    echo "<p>Povrsina kvadrata je: ". $p1->povrsinaPravougaonika() . "</p>";

    $p2 = new Pravougaonik(10, 7);
    echo "<p>Obim kvadrata je: ". $p2->obimPravougaonika() . "</p>";
    echo "<p>Povrsina kvadrata je: ". $p2->povrsinaPravougaonika() . "</p>";

    $p3 = new Pravougaonik(16, 9);
    echo "<p>Obim kvadrata je: ". $p3->obimPravougaonika() . "</p>";
    echo "<p>Povrsina kvadrata je: ". $p3->povrsinaPravougaonika() . "</p>";

    $t4 = new Trougao(16, 15, 26); // construktor se poziva samo jednom kada se formira objekat
    $t4->setA(6); // poziva se tek kad vec imamo objekat 
    echo "<p>Obim trougla je: ". $t3->obimTrougla() . "</p>";
    echo "<p>Povrsina trougla je: ". $t3->povrsinaTrougla() . "</p>";

    // nakon menjanja trougao.php u trougao_staro.php i kreiranja novog trougao.php
    


?>