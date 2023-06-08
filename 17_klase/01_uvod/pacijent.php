<?php

    class Pacijent
    {
        var $ime;
        var $visina;
        var $tezina;

        function stampaj()
        {
            echo "<p>Ime pacijenta : $this->ime, visina : $this->visina, $this->tezina.</p>";
        }

        function bmi()
        {
            return $this->tezina / ($this->visina ** 2);
            
        }

        function kritican()
        {
            $bmi = $this->bmi();
            return $bmi < 15 || $bmi > 40;
        }
    }

$p1 = new Pacijent();
$p1->ime = "Dunja Kolarski";
$p1->visina = 1.6;
$p1->tezina = 53;
$p1->stampaj();
echo $p1->bmi() . "<br>";
echo "Kritican :" . ($p1->kritican()?"Kritican":"Nije kritican"). "<br>";

$p2 = new Pacijent();
$p2->ime = "Dejan Popovic";
$p2->visina = 1.8;
$p2->tezina = 178;
$p2->stampaj();
echo $p2->bmi() . "<br>";
echo "Kritican :" . ($p2->kritican()?"Kritican":"Nije kritican"). "<br>";

$p3 = new Pacijent;
$p3->ime = "Marija Kolarski";
$p3->visina = 1.7;
$p3->tezina = 60;
$p3->stampaj();
echo $p3->bmi() . "<br>";
echo "Kritican :" . ($p3->kritican()?"Kritican":"Nije kritican"). "<br>";





?>