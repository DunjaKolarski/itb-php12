<?php

require_once "vozilo.php";
require_once "automobil.php";


$v = new Vozilo("a", "b", "c");
$v->ispis();

// echo $v->privatnoPolje; ne mozemo da pristupimo privatnom polju (ni metodu) direktno van klase 

// echo $v->zasticenoPolje; ne mozemo da pristupimo protected polju (ni metodu) direktno van klase 

echo $v->javnoPolje; // mozemo da pristupimo javnom polju van klase i direktno 

$a = new Automobil("d", "e", "f", 5);
$a->ispis();
$a->ispisAuto(); // ne prepoznaje privatno polje 







?>