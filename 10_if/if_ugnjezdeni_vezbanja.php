<?php

    // 19 Zadatak
    // kao 6 zadatak

    $br1 = 1000;
    $br2 = 10;
    $br3 = 300;

    if ($br1 > $br2)
    {
        $pom = $br1;
        $br1 = $br2;
        $br2 = $pom;
    }
    // nakon ovog ifa u $br1 je sigurno manja vrednost nego u $br2

    if ($br1 > $br3)
    {
        $pom = $br1;
        $br1 = $br3;
        $br3 = $pom;
    }
    // nakon ovog ifa u $br1 je sigurno najmanja vrednost od zadate tri
    
    if ($br2 > $br3)
    {
        $pom = $br2;
        $br2 = $br3;
        $br3 = $pom;
    }
    // nakom ovog ifa vazi $br1 <= $br2 <= $br3
    echo "<p> $br1 <= $br2 <= $br3 </p>";


    // 20 Zadatak

    $n1 = 20.2;
    $n2 = 200.4;
    $br1 = round($n1);
    $br2 = round($n2);

    if ($br1 > $br2)
    {
        $pom = $br1;
        $br1 = $br2;
        $br2 = $pom;

        if ($br2%2 == 0)
        {
            echo "<p>Veci broj $br2 je paran</p>";
        }
        else
        {
            echo "<p>Veci broj $br2 je neparan</p>";
        }
    }
    elseif ($br2 > $br1)
    {
        $pom = $br2;
        $br2 = $br1;
        $br1 = $pom;
        if ($br2%2 == 0)
        {
            echo "<p>Veci broj $br1 je paran</p>";
        }
        else
        {
            echo "<p>Veci broj $br1 je neparan</p>";
        }
    }
    else
    {
        echo "<p>Brojevi $br1 i $br2 su jednaki</p>";
    }
    // nakon prvog  ifa znamo da je $br1 manji
     

    // Zadatak 21

    $a = 500;
    $b = 100;
    $c = 30;
    
    if ($a >= $b && $a >= $c)
    {
        echo "<p>Broj $a je najveci</p>";
    }
    elseif ($b >= $a && $b >= $c)
    {
        echo "<p>Broj $b je najveci</p>";
    }
    else
    {
        echo "<p>Broj $c je najveci</p>";
    }
    

    // Zadatak 22

    $c = 45;

    if ($c < -15 || $c > 40)
    {
        echo "<p>ekstremna temperatura</p>";
    }
    

    // Zadatak 23
/////////////////
    $godinaTren = 500;//date("Y");

    if ($godinaTren%4 == 0)
    {
        if ($godinaTren%100 == 0 && $godinaTren%400 != 0)
        {
            echo "<p>Godina $godinaTren nije prestupna</p>";
        }
        else
        {
            echo "<p>Godina $godinaTren je prestupna</p>";
        }
    }
    else
    {
        echo "<p>Godina $godinaTren nije prestupna</p>";
    }

    // Zadatak 24 
    // slican 12 zad

    // Prvi lekar
    $satiPocetka1 = 7;
    $minutiPocetka1 = 30;

    $satiKraja1 = 20;
    $minutiKraja1 = 20;

    $p1 = $satiPocetka1 * 60 + $minutiPocetka1; //pocetno vreme rada u minutama dana
    $k1 = $satiKraja1 * 60 + $minutiKraja1; //krajnje vreme rada u minutama dana
    
    
    // Drugi lekar

    $satiPocetka2 = 7;
    $minutiPocetka2 = 30;

    $satiKraja2 = 20;
    $minutiKraja2 = 20;

    $p2 = $satiPocetka2 * 60 + $minutiPocetka2; //pocetno vreme rada u minutama dana
    $k2 = $satiKraja2 * 60 + $minutiKraja2; //krajnje vreme rada u minutama dana
  

    if ($k1 < $p2)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    elseif ($k2 < $p1)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    else
    {
        if (($p2 > $p1 && $k2 > $k1) && $k1 > $p2)
        {
            $vremeP = $k1 - $p2;
            $sat = intval($vremeP / 60);
            $min = $vremeP - $sat * 60;
            echo "<p>Vreme preklapanja je $sat sati i $min minuta </p>";
        }
        elseif (($p1 > $p2 && $k1 > $k2) && $k2 > $p1)
        {
            $vremeP = $k2 - $p1;
            $sat = intval($vremeP / 60);
            $min = $vremeP - $sat * 60;
            echo "<p>Vreme preklapanja je $sat sati i $min minuta </p>";
        }
        elseif (($p2 >= $p1 && $k1 >= $k2) && ($k2 > $p1 && $k2 > $p2))
        {
            $vremeP = $k2 - $p2;
            $sat = intval($vremeP / 60);
            $min = $vremeP - $sat * 60;
            echo "<p>Vreme preklapanja je $sat sati i $min minuta </p>";
        }
        else //(($p1 >= $p2 && $k2 >= $k1) && ($k1 > $p2 && $k2 > $p1))// moze li else
        {
            $vremeP = $k1 - $p1;
            $sat = intval($vremeP / 60);
            $min = $vremeP - $sat * 60;
            echo "<p>Vreme preklapanja je $sat sati i $min minuta </p>";
        }
       
        
    }




?>