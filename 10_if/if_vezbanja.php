<?php
    // Zadatak 1
    $a = 19.35;
    $b = -3.14;
    if ($a > $b)
    {
        echo "<p>Veci je broj $a</p>";
    }
    else
    {
        echo "<p>Veci je broj $b</p>";
    }

    //alternativno terarni operator

    echo "<p> Veci je broj " . (($a > $b) ? $a : $b) . " </p>";


    // Zadatak 4
    $dobdaDana = date("a");
    if ($dobdaDana == "am")
    {
        echo "<p>Pre podne</p>";
    }
    else 
    {
        echo "<p>Posle podne</p>";
    }
    //alternativno
    $dobdaDana = date("a");
    if ($dobdaDana == "pm")
    {
        echo "<p>Posle podne</p>";
    }
    else 
    {
        echo "<p>Pre podne</p>";
    }

    // Zadatak 3
    $pol ="M";
    if ($pol == "M")
    {
        echo "<p><img src='images/m.png' alt='muski pol'></p>";//ne mozemo i u src da stavljamo dvostruke navodnike vec moramo jednosruke zbog spoljasnhih dvostrukih
    }
    else 
    {
        echo "<p><img src='images/f.png' alt='zenski pol'></p>";//ne mozemo i u src da stavljamo dvostruke navodnike vec moramo jednosruke zbog spoljasnhih dvostrukih
    }

    // Zadatak 2
    $temperatura = 30;
    if ($temperatura >= 0)
    {
        echo "<p>Temperatura iznosi $temperatura i u plusu je</p>";
    }
    else
    {
        echo "<p>Temperatura iznosi $temperatura i u minusu je</p>";
    }
    //Zadatak 5
    $godinaSaRacunara = date("Y");
    $godinaRodjenja = 1996;

    if ($godinaSaRacunara <= 2005)
    {
        echo "<p>Osoba je punoletna</p>";
    }
    else
    {
        echo "<p>Osoba je maloletna</p>";
    }
    if ($godinaRodjenja <= 2005)
    {
        echo "<p>Osoba je punoletna</p>";
    }
    else
    {
        echo "<p>Osoba je maloletna</p>";
    }

    // Zadatak 6
    $a = 9;
    $b = -6;
    $c = 6;
    
    if ($a > $b)
    {
        $pom = $a;
        $a = $b;
        $b = $pom;
    }

    //nakon ovog ifa u $a je sigurno manja vrednost nego u $b
    
    if ($a > $c)
    {
        $pom = $a;
        $a = $c;
        $c = $pom;
    }
    //nakon ovog ifa u $a je sigurno najmanja vrednost od zadate tri

    if ($b > $c)
    {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }
    //nakon ovog ifa  vazi $a <= $b <= $c
    echo "<p> $a <= $b <= $c </p>";

  
?>


