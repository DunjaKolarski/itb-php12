<?php
// zadatak stabla

$stabla = [50, 10, 25, 30, 50, 3];

function brojNeposecenihStabala ($stabla, $testera)
{
    $brNeposecenih = 0;
    foreach ($stabla as $stablo)
    {
        if ($stablo <= $testera)
        {
            $brNeposecenih++;
        }
    }
    return $brNeposecenih;
}
echo "<p>Broj neposecenih stabla je " .  brojNeposecenihStabala($stabla, 20)."</p>";
echo "<hr>";

function ukupnoPoseceno ($stabla, $testera)
{
    $ukupnoPoseceno = 0;
    foreach ($stabla as $stablo)
    {
        if ($stablo > $testera)
        {
            $ukupnoPoseceno++;
        }
    }
    return $ukupnoPoseceno;
}
echo "<p>Ukupan broj posecenih stabla je " .  ukupnoPoseceno($stabla, 20)."</p>";
echo "<hr>";

function maxDuzina ($stabla, $testera)
{
    $maksDuz = 0;
    $trenutna = 0;
    foreach ($stabla as $visina)
    {
        if ($visina > $testera)
        {
            $trenutna++;
        }
        else
        {
            if ($trenutna > $maksDuz)
            {
                $trenutna = $maksDuz;
            }
        }

    }
    if ($trenutna > $maksDuz)
    {
        $maksDuz = $trenutna;
    }
    return $maksDuz;
}
echo "<p>Maksimalna duzina posecenih stabla je " .  maxDuzina($stabla, 20)."</p>";
echo "<hr>";

// zadatak pijaca
$cena = [
    "jagode" => 500,
    "breskve" => 300,
    "banane" => 200
];
$kolicina = [
    "jagode" => 0,
    "breskve" => 100,
    "banane" => 20

];

function stanje ($cena, $kolicina)
{
    foreach ($cena as $imeVoca => $cenaPoj)
    {
        if ($kolicina[$imeVoca] > 0)
        {
            echo "<p style='color:green'>Ime na stanju: ". $imeVoca . " i  cena je " .  $cenaPoj ." po kg</p>";
        }
        else
        {
            echo "<p style='color:red'>Nema na stanju: ". $imeVoca . " i cena je "  . $cenaPoj ." po kg</p>";
        }

    }

}
echo stanje($cena, $kolicina);


function prvoPonudi ($cena, $kolicina)
{
    $maksimalnavrednost = 0;
    foreach ($cena as $imeVoca => $cenaPoj)
    {
        if ($kolicina[$imeVoca] > 0)
        {
            $vrednost = $kolicina[$imeVoca] * $cena[$imeVoca];

            if ($vrednost > $maksimalnavrednost)
            {
                $maksimalnavrednost = $vrednost;
                $voceSaMaks = $imeVoca;
            }
        }

    }
    return $voceSaMaks;
}
echo "Prvo ponudi " .  prvoPonudi($cena, $kolicina)."</p>";
echo "<hr>";

?>