<?php

require_once "dizelAuto.php";
require_once "benzinAuto.php";


$b1 = new BenzinAuto("BMW",356777,5, 200);
$b2 = new BenzinAuto("BMW",6788,6, 200);
$b3 = new BenzinAuto("BMW",100000,15, 200);

$d1 = new DizelAuto("Fiat", 500, 4, 220);
$d2 = new DizelAuto("Megan", 50099, 4.5, 220);
$d3 = new DizelAuto("Fiat", 5006, 5, 220);

$automobili = [$b1, $b2, $b3, $d1, $d2, $d3];


function maksUlozeno($automobili)
{
    $maks = 0;
    foreach($automobili as $auto)
    {
        $ulozeno = $auto->ulozenoPara();
        if($ulozeno > $maks)
        {
            $maks = $ulozeno;
            $autoMaks = $auto;
        }

    }
    echo $autoMaks->ispis();
}

echo "<p>Maksimalno ulozeno je u auto: ";
maksUlozeno($automobili);
echo "</p>";


function boljiTip($automobili)
{
    $sumDizel = 0;
    $sumBenzin= 0;
    $brDizel = 0;
    $brBenzin = 0;
    foreach($automobili as $auto)
    {
        if($auto->getTipGoriva() == "DIZEL")
        {
            $sumDizel += $auto->ulozenoPara();
            $brDizel++;
        }
        elseif($auto->getTipGoriva() == "BENZIN")
        {
            $sumBenzin += $auto->ulozenoPara();
            $brBenzin++;
        }
    }
    $prosekD = ($brDizel > 0 ) ? $sumDizel / $brDizel : 0;
    $prosekB = ($brBenzin > 0 ) ? $sumBenzin / $brBenzin : 0;

    if($prosekB > $prosekD)
    {
        return "DIZEL";
    }
    elseif($prosekD > $prosekB)
    {
        return "BENZIN";
    }
    else
    {
        return "<p>Nema razlike u ulaganju.</p>";
    }
}

echo "<p>Bolji tip je: </p>";
echo boljiTip($automobili);
?>