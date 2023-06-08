<?php

    $brojStrana = [500, 200, 330, 400, 120];
    $cena = [5000, 3500, 1200, 900, 600];

    // PROLAZAK
    // for($i = 0; $i<count($brojStrana); $i++)
    // foreach($brojStrana as $brS)
    // $i = 0; while ($i < $brojStrana{...$i++;})

    // // UZIMANJE VREDNOSTI ELEMENATA
    // $brS = $brojStrana[0]; // ovo vraca 500
    // $brS2 = $brojStrana[2]; 

    // maks prosek , knjiga sa najskupljom str
    function maxProsek($cena, $brojStrana)
    {
        $max = 0;
        for ($i = 0; $i < count($brojStrana); $i++)
        {
            $t = $cena[$i] / $brojStrana[$i];
            if($max < $t)
            {
                $max = $t;
            }
        }

        return $max;
    }



    $brojStranaA = [
        "knjiga1" => 500,
        "knjiga2" => 200,
        "knjiga3" => 330,
        "knjiga4" => 400,
        "knjiga5" => 120
    ];
    $cenaA = [
        "knjiga1" => 5000,
        "knjiga2" => 3500,
        "knjiga3" => 1200,
        "knjiga4" => 900,
        "knjiga5" => 600
    ];
    

    // PROLAZAK kroz asoc niza foreach as $k=>$v
    function maxProsekA($brojStranaA, $cenaA)
    {
        $max = 0;
        foreach($brojStranaA as $k => $v)
        {
            $t = $cenaA[$k]/$v;
        }
        if($max < $t)
        {
            $max = $t;
        }

        return $max;
    }


    // NIZ NIZOVA 
    $nizKnjiga = [
        ["brojStrana" => 500, "cena" => 5000],
        ["brojStrana" => 200, "cena" => 3500],
        ["brojStrana" => 330, "cena" => 1200],
        ["brojStrana" => 400, "cena" => 900],
        ["brojStrana" => 120, "cena" => 600]
    ];

    // PROLAZAK
    function maxProsekNizaA($nizKnjiga)
    {
        $max = 0;
        for($i = 0; $i < count($nizKnjiga); $i++)
        {
            $t = $nizKnjiga[$i]["cena"] / $nizKnjiga[$i]["brojStrana"];
            if($max < $t)
            {
                $max = $t;
            }
        }
        return $max;
    }

    $dan = [
        "temperatura" => [8, 5, 15, -2, 0]
    ];

    for($i = 0; $i < count($dan("temperatura")); $i++)
    {
        $t = $dan["temperatura"][$i];
    }


    class Knjiga 
    {
        public $brojStrana;
        public $cena;
    }
    
?>
