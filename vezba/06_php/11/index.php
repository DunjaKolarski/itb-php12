<?php

require_once "autobus.php";

$a1 = new Autobus ("456-GG", 35);
$a2 = new Autobus ("678-SD", 150);
$a3 = new Autobus ("987-JK", 50);
$a4 = new Autobus ("999-HJ", 45);



$autobusi = [$a1, $a2, $a3, $a4];

function ukupnoSedista($autobusi)
{
    $sum = 0;
    foreach($autobusi as $bus)
    {
        $sum += $bus->getBrojSedista();
    }
    return $sum;
}

echo "<p>Ukupan broj sedista je: " . ukupnoSedista($autobusi) . "</p>";

function maksSedista($autobusi)
{
    $maks = 0;
    foreach($autobusi as $bus)
    {
        $trenutni = $bus->getBrojSedista();
        if($trenutni > $maks)
        {
            $maks = $trenutni;
            $autobusSaM = $bus;
        }
    }
    echo  $autobusSaM->ispis();
}
echo "<p>Podaci o autobusu sa maksimalnim brojem sedista su:";
maksSedista($autobusi);
echo "</p>";


function ljudi($brLjudi, $autobusi)
{
    $ukupanBrSedista = ukupnoSedista($autobusi);
    if($brLjudi <= $ukupanBrSedista)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

echo "Da li ovaj broj ljudi moze da stane u autobuse? ";
echo (ljudi(15,$autobusi)? "Da": "Ne");
echo "</p>";
?>