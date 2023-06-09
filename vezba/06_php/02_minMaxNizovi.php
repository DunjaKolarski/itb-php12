<?php

$student1 = [
    ["naziv" => "srpski", "datum" => "2022/03/13", "ocena" => 10],
    ["naziv" => "engleski", "datum" => "2022/10/13", "ocena" => 9],
    ["naziv" => "statistika", "datum" => "2022/05/13", "ocena" => 10],
    ["naziv" => "matematika1", "datum" => "2021/03/15", "ocena" => 10],
    ["naziv" => "matematika2", "datum" => "2021/01/23", "ocena" => 8],
];

function maxOcena($predmeti)
{
    $maxOcena = 0;
    foreach($predmeti as $predmet)
    {
        $ocena = $predmet["ocena"];
        if($ocena > $maxOcena)
        {
            $maxOcena = $ocena;
        }
    }
    return $maxOcena;
}

echo "<p>Maksimalna ocena koju je student dobio tokom studija je " . maxOcena($student1). "</p>";

function studentGeneracije($predmeti)
{
    $br9 = 0;
    $br10 = 0;
    foreach($predmeti as $predmet)
    {
        if($predmet["ocena"] == 9)
        {
            $br9++;
        }
        elseif($predmet["ocena"] == 10)
        {
            $br10++;
        }
        else
        {
            return FALSE;
        }
    }
    if($br10 >= $br9)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
echo "<p>Student je student generacije: " .(studentGeneracije($student1) ? "Jeste" : "Nije") . "</p>";


function predmetiPolozeniG($predmeti,$godina)
{
    foreach($predmeti as $predmet)
    {
        $godinaPolaganja = (int)substr($predmet["datum"], 0, 4);
        if($godinaPolaganja == $godina)
        {
            echo $predmet["naziv"];
        }
    }
}

$dataGodina = 2021;
echo "<p>Student je godine $dataGodina polozio predmete: ". predmetiPolozeniG($student1, $dataGodina) . "</p>";

function prosecnaOcenaGodine($predmeti,$godina)
{
    $sum = 0;
    $brPredmeta = 0;
    foreach($predmeti as $predmet)
    {
        $godinaPolaganja = (int)substr($predmet["datum"], 0, 4);
        if($godinaPolaganja == $godina)
        {
            $sum += $predmet["ocena"];
            $brPredmeta++;
        }
    }
    if($brPredmeta == 0)
    {
        return 0;
    }
    else
    {
        return $sum/$brPredmeta;
    }
}


echo "<p>Prosecna ocena studenta, polozenih predmeta, godine $dataGodina je: ". prosecnaOcenaGodine($student1,$dataGodina) . "</p>";
?>