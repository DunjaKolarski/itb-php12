<?php

    require_once "krug.php";

    $k1 = new Krug(5);
    $k2 = new Krug(8);
    $k3 = new Krug(10);
    $k4 = new Krug(2);
    $k5 = new Krug(-4);

    echo "<p>Obim kruga je ". $k1->obimKruga(). "</p>";
    echo "<p>Povrsina  kruga je ". $k1->povrsinaKruga(). "</p>";

    echo "<p>Obim kruga je ". $k2->obimKruga(). "</p>";
    echo "<p>Povrsina  kruga je ". $k2->povrsinaKruga(). "</p>";

    echo "<p>Obim kruga je ". $k3->obimKruga(). "</p>";
    echo "<p>Povrsina  kruga je ". $k3->povrsinaKruga(). "</p>";

    echo "<p>Obim kruga je ". $k4->obimKruga(). "</p>";
    echo "<p>Povrsina  kruga je ". $k4->povrsinaKruga(). "</p>";

    echo "<p>Obim kruga je ". $k5->obimKruga(). "</p>";
    echo "<p>Povrsina  kruga je ". $k5->povrsinaKruga(). "</p>";

    echo Krug::PI; //moze da ispise i bez objekta kruga, jer je konstanta vezana za klasu a ne objekat, i pisemo Krug jer nismo unutar Kruga pa mora da zna na koju klasu mislimo!!!!!!!!

    // konstante se ne vezuju za matematicke konstante koriste se i na drugim primerima kad nam treba nesto sto treba da bude nepromenjljivo  npr u klasi osoba imamo konstantu 1 i konstantu 2 konstanta 1 se daje zenskoj osobi a 2 muskoj

    // npr u domacem 12 tipGoriva moze da bude konstanta probati ?
    // staticke metode i polja mogu se pozati i bez kreiranja  objekta te klase
    // staticke metode se vezuju za klasu ne za objekte i odredjene metode su samo pogodne da budu staticke

    // $k1->pi = 3.14159; //menjanje konstante pomocu static polja $pi ovako postavljamo ako je public

    $k1->setPi(3.14159); // promenili smo na private tako da je pi sad mozemo da menjamo samo pomocu setera
    // MORAMO I UNUTAR KLASE DA PROMENIMO DA SE NE POZIVA NA KOSTANTU PI vec na $pi
    echo "<p>Obim kruga je ". $k1->obimKruga(). "</p>";
    echo "<p>Povrsina  kruga je ". $k1->povrsinaKruga(). "</p>";


    echo Krug::getPi();// mozemo i bez objekta klase da pristupimo static poljima ali posto niej public negoje private mozemo da mu pristupamo pomocu getera ali i f=geter mora biti static
    
    Krug::setPi(3.14159); // mozemo i da menjamo static polje bez objekta klase ovo je primer za pivate polje da je bilo public mogli smo i bez getera i setera i ovo i koriscenjePi primer gore


    Krug::setBrojDecimala(4);
    echo "<p>Obim kruga je ". $k1->obimKruga(). "</p>";
    echo "<p>Povrsina  kruga je ". $k1->povrsinaKruga(). "</p>";// korisnik sam menja  broj decimala 


    // echo "<p>Broj krugova do sada je: ". Krug::$brojKrugova ."</p>"; // broj krugova 5 

    // $k6 = new Krug(2); // novi krug

    // echo "<p>Broj krugova do sada je: ". Krug::$brojKrugova ."</p>"; // broj krugova 6 
    // kad je javno polje moze ovako da mu se pristupa ovako

    // kada je polje private pristupamo ovako

    echo "<p>Broj krugova do sada je: ". Krug::getBrojKrugova() ."</p>"; // broj krugova 5 

    $k6 = new Krug(2); // novi krug

    echo "<p>Broj krugova do sada je: ". Krug::getBrojKrugova() ."</p>"; // broj krugova 6 





?>