<?php

    require_once "automobil.php";

    /* ovako smo radili dok su nam polja vozilo bili public
    $v = new Vozilo();
    // $v->boja = "bela";
    // $v->tip = "bmw";
    // echo "<p>$v->boja, $v->tip</p>";
    $v->voziVozilo();
    // $v->voziAutomobil(); - nije dobro , osnovna klasa nema polja i metode iz izvedenih klasa!!!!!!

    $a = new Automboli();
    // $a->boja = "zuta";
    // $a->tip = "peugeout";
    // echo "<p>$a->boja, $a->tip</p>";
    $a->voziVozilo(); // - jeste dobro, izvedenea klasa je nasledila polja i metode iz osnovne klase
    $a->voziAutomobil(); // - jeste dobro, izvedena klasa moze da ima svoje specificne polja i metode
    */


    // ovako radimo kad su private

    $v = new Vozilo("bela","bmw");
    $v->voziVozilo();

    $a = new Automboli("zuta","peugeo");
    // $a->boja = "plava"; - ne mozemo da pristupimo protected polju van klase
    $a->voziVozilo();
    $a->voziAutomobil();
?>