<?php

require_once "zbirka_zadataka.php";
require_once "udzbenik.php";

$udz = new Udzbenik("Citanka za Srpski jezik", 200, 1200, 24000);
$zbirka = new ZbirkaZadataka("Zbirka zadataka iz matematike za peti razred", 230, 2000, 30000);

$udz->stampa();
echo "<p>Jedinicna cena za udzbenik je: " . $udz->jedinicnaCena() . "</p>";

$zbirka->stampa();
echo "<p>Jedinicna cena za zbirku zadataka je: " . $zbirka->jedinicnaCena() . "</p>";




?>