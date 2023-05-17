<?php

    // Zadatak 1

    for($i = 1; $i <= 20; $i++) //umesto $i++ moze i $i+=2 za svaki drugi broj npr 1 3 5 7 9 itd
    {
        echo "$i ";
    }

    echo "<br>";

    // Zadatak 2

    for($i = 20; $i >= 1; $i--)
    {
        echo "$i ";
    }

    echo "<br>";

    // Zadatak 3

    for($i = 1; $i <= 20; $i++)
    {
        if($i % 2 ==0)
        {
            echo "$i ";
        }
    }

    echo "<br>";

    // Zadatak 4

    for($i = 5; $i <= 15; $i++)
    {
        $dvostrukoI= $i * 2;
        echo "$dvostrukoI ";
        
    }

    echo "<br>";
    // Zadatak 5

    $sum = 0;
    for($i = 1; $i <=100 ; $i++)
    {
        $sum += $i;
    }
    echo "<p>Suma brojeva od 1 do 100 je $sum</p>";

    // Zadatak 6

    $n = 200;
    $sum = 0;
    for($i = 1; $i <= $n; $i++)
    {
        $sum += $i;
    }
    echo "<p>Suma brojeva od 1 do $n je $sum</p>";

    // Zadatak 7

    $n = 1;
    $m = 200;
    $sum = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $sum += $i;
    }
    echo "<p>Suma brojeva od $n do $m je $sum</p>";

    // Zadatak 8

    $n = 1;
    $m = 20;
    $pro = 1;
    for($i = $n; $i <= $m; $i++)
    {
        $pro *= $i;
    }
    echo "<p>Proizvod brojeva od $n do $m je $pro</p>";

    // Zadatak 9

    $n = 1;
    $m = 20;
    $sumkva = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $sumkva += pow($i,2); // $i**2
    }
    echo "<p>Suma kvadrata brojeva od $n do $m je $sumkva</p>";

    // Zadatak 10

    /*
    1 % 3 = 1 -> 1.jpg
    2 % 3 = 2 -> 2.jpg
    3 % 3 = 0 -> 3.jpg
    4 % 3 = 1 -> 1.jpg
    5 % 3 = 2 -> 2.jpg
    6 % 3 = 0 -> 3.jpg
    7 % 3 = 1 -> 1.jpg
    ponavlja se ciklus 

    */
    $n = 7;
    for($i = 1; $i <= $n; $i++) 
    {   
        if($i % 3 == 1)
        {
            echo "<img src='images/1.jpg'>";
        }
        elseif($i % 3 == 2)
        {
            echo "<img src='images/2.jpg'>";
        }
        else
        {
            echo "<img src='images/3.jpg'>";
        }

        
        
    }
    // 2. i 3. nacin izvezbati sa koda sa casa!! i primer petlje u petlji bitno da imaju razlicite brojace !! 
    //vezba za sahovsku tablu na stranici koristecu for petlju/petlje na ekranu ispisati  sahovsku tablu
    // 8*8 dimenzija sa naizmenicnim crnim i belim poljima 
    
    echo "<br>";
    // Zadatak 11
    $sum = 0;
    for($i = 1; $i <= 30; $i++)
    {
        if($i % 9 == 0)
        {
            $sum += $i;
        }
    }
    echo $sum;
    echo "<br>";

    // Zadatak 12
    $pro = 1;
    for($i = 20; $i <= 100; $i++)
    {
        if($i % 11 == 0)
        {
            $pro *= $i;
        }
    }
    echo $pro;
    echo "<br>";
    
    // Zadatak 13

    $brB = 0;
    for($i = 5; $i <= 150; $i++)
    {
        if($i % 13 == 0)
        {
            $brB++;
        }
    }
    echo $brB;
    echo "<br>";

    // Zadatak 14

    $n = 1;
    $m = 10;
    $sumBr = 0;
    $brB = 0;
    for ($i = $n; $i <= $m; $i++)
    {
       $sum += $i;
       $brB++;
    }
    $aSred = $sum/$brB;
    echo "<p>Aritmeticka sredina brojeva od $n do $m je $aSred</p>";


    // Zadatak 15

    $n = -2;
    $m = 3;
    $poz = 0;
    $neg = 0;

    for ($i = $n; $i <= $m; $i++)
    {
        if ($i < 0)
        {
            $neg++;
        }
        else
        {
            $poz++;
        }
    }
    echo "<p>U intervalu brojeva od $n do $m ima $neg negativnih brojeva i $poz pozitivnih brojeva</p>";

    // Zadatak 16
    $brB = 0;
    for($i = 5; $i <= 50; $i++)
    {
        if($i % 3 == 0 || $i % 5 == 0)
        {
            $brB++;
        }
    }
    echo "<p>Broj brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5 je $brB</p>";

    // Zadatak 17
    
    $n = 1;
    $m = 20;
    $sum = 0;
    $brB = 0;
    for ($i = $n; $i <= $m; $i++)
    {
        if ($i % 10 == 4) //svaki broj koji se zavrsava sa 4 je paran pa je $i % 2 == 0 nepotrebno
        {
            $brB++;
            $sum += $i;
        }
    }
    echo "<p>U intervalu brojeva od $n do $m broj brojeva koji su parni i poslednja cifra im je 4 je $brB a njihova suma iznosi $sum</p>";

    // Zadatak 18

    $n = 1;
    $m = 10;
    $a = 2;
    for ($i = $n; $i <= $m; $i++)
    {
        if ($i % $a == 0)
        {
            echo "$i ";
        }
    }

    echo "<br>";
    // 2.  nacin
    $start = ceil($n / $a) * $a; //da bi dobili prvi broj koji je deljiv sa $a od br $n, ceil zaokruz na gornju granicu
    $end =  floor($m / $a) * $a; //najveci br koji je deljiv sa $a od $n do $m, floor zaokruz na donju granicu

    for ($i = $start; $i <= $end; $i+=$a)
    {
        echo "$i ";
    }
    echo "<br>";

    
    // Zadatak 21
    $n = 14;
    $m = 32;
    $a = 5;
    $b = 10;
    $p = 1;

    for ($i = $n; $i <= $m; $i++)
    {
        if ($i % $a == 0 && $i % $b != 0)
        {
            $p *= $i;
        }
    }
    echo "<p>Proizvod brojeva u intervalu od $n do $m ,proizvod brojeva daljivih sa $a a da nisu sa $b deljivi je $p</p> ";

    // 2. nacin
    $n = 14;
    $m = 32;
    $a = 5;
    $b = 10;
    $p = 1;
    $start = ceil($n / $a) * $a;
    $end =  floor($m / $a) * $a;
    for ($i = $start; $i <= $end; $i+= $a)
    {
        if ( $i % $b == 0)
        {
            continue;//ne izvrsava ispod sta pise vec ide na na naredni korak u petlji naredni $i
        }
        $p *= $i;
    }
    echo "<p>Proizvod brojeva u intervalu od $n do $m ,proizvod brojeva daljivih sa $a a da nisu sa $b deljivi je $p</p> ";

    // Zadatak 19

    $n = 1;
    $m = 10;
    $a = 2;
    for ($i = $n; $i <= $m; $i++)
    {
        if ($i % $a != 0)
        {
            echo "$i ";
        }
    }

    echo "<br>";

    // Zadatak 20

    $n = 1;
    $m = 10;
    $a = 2;
    $sum = 0;
    for ($i = $n; $i <= $m; $i++)
    {
        if ($i % $a != 0)
        {
            $sum += $i;
        }
    }
    echo "<p>Suma intervala brojeva od $n do $m , koji nisu deljivi sa brojem $a je $sum</p>";















?>