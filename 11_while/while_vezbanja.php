<?php


    // While petlja
/*   
    1. Postavite pocetnu vrednost - inicijalizacija
    2. while(uslov)
        2.a. TRUE - Blok naredbi koji se odvija ukoliko je uslov u while petlji ispunjen
        2.b. FALSE - Ne izvrsava se blok naredbi unutar while petlje vec se prelazi na kod ispod bloka

*/

    // Zadatak 1 // kada pise do tog br ukljucicemo i taj br

    $i = 1;
    while ($i <= 20)
    {
        echo "$i ";
        $i++;
    }
    $i = 1;
    while ($i <= 20)
    {
        echo "<p>$i </p>";
        $i++;
    }
    
    // Zadatak 2

    $i = 20;
    while ( $i >= 1)
    {
        echo "$i ";
        $i--;
    }

    echo "<br>";

    // Zadatak 4

    $n = 5;
    $i = 1;
    while($i <= $n)
    {
        if($i%3 == 0)
        {
            echo "<p style='color:red;'>Hello $i</p>";
        }
        elseif($i%3 == 1)
        {
            echo "<p style='color:blue;'>Hello $i</p>";
        }
        else
        {
            echo "<p style='color:orange;'>Hello $i</p>";
        }
        $i++;
    }

    // alternativno
    $n = 5;
    $i = 1;
    while($i <= $n)
    {
        if($i%3 == 0)
        {
            $boja = "purple";
        }
        elseif($i%3 == 1)
        {
            $boja = "lime";
        }
        else
        {
            $boja = "magenta";
        }
        echo "<p style='color:$boja;'>Hello $i</p>";
        $i++;
    }

    echo "<br>";


    // Zadatak 3
    
    $i = 1;
    while($i <= 20)
    {
        if ($i%2 == 0)
        {
            echo "$i ";
        }
        $i++;
    }
    echo "<br>";

    // Zadatak 5
    $n = 3;
    $i = 1;
    while ($i <= $n)
    {
        if($i%2 == 0)
        {
            echo "<img style='border:5px solid black;' src=dog.jpg> <br>";
        }
        else
        {
            echo "<img style='border:5px solid blue;' src=dog.jpg> <br>";
        }
        $i++;
    }
    echo "<br>";
    // Dodatni zadatak

    $n = 5;
    $i = 1;
    

    while($i <= $n)
    {
        $boja= "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")";
        echo "<p style='color:$boja;'>Hello $i</p>";
        $i++;
    }

    echo "<br>";

    // Zadatak 6 //det objasnjeno u videu predavanja primeri za interviju
    $i = 1;
    $sum = 0;    ///////////////bitno za sumu
    while($i <= 100)
    {   
        $sum += $i;
        $i++;
    }
    echo "Suma brojeva od 1 do 100 je $sum";
    echo "<br>";

    // Zadatak 7

    $n = 3;
    $i = 1;
    $sum = 0;

    while ($i <= $n)
    {
       $sum += $i;
       $i++;
    }
    echo "Suma brojeva od 1 do $n je $sum";
    echo "<br>";

    // Zadatak 8
    $m = 3;
    $n = 2;
    $i = $n;
    $sum = 0;

    while ($i <= $m)
    {
       $sum += $i;
       $i++;
    }
    echo "Suma brojeva od $n do $m je $sum";
    echo "<br>";


    // Zadatak 9
    $n = 1;
    $m = 3;
    $i = $n;
    $proiz = 1;          /////////////////bitno za proivod
    while ($i <= $m)
    {
        $proiz *= $i ;
        $i++;
    }
    echo "Proizvod brojeva od $n do $m je $proiz";
    echo "<br>";

    // Zadatak 10 

    $n = 1;
    $m = 3;
    $i = $n;
    $sumP = 0;
    $sumN = 0;
    while($i <= $m)
    {
        if($i%2 == 0)
        {
            $sumP += pow($i,2); //$i**2 na kvadrat
            
        }
        else
        {
            $sumN += pow($i,3); //$i**3 na kubni
        
        }
        $i++;
    }
    echo "Suma kvadrata parnih brojeva je $sumP, a suma kubnih neparnih brojeva je $sumN";
    echo "<br>";


    // Zadatak 11 
    $k = 6;
    $i = 1;
    $brB = 0;
    while($i <= $k)
    {
        if($k%$i == 0)
        {
            $brB++;
        }
        $i++;
    }
    echo "Broj $k ima $brB delilaca";
    echo "<br>";

    // Zadatak 12

    $k = 13; // uneti broj
    $i = 1; // iteretor koji pokusava da deli broj $k
    $brB = 0; // sa koliko br je deljiv uneti broj $k
    while($i <= $k)
    {
        if($k%$i == 0)
        {
            $brB++;
        }
        $i++;
    }
    // imacemo sa koliko br je deljiv br $k
    if($brB == 2)
    {
        echo "<p>Broj $k je prost</p>";
    }
    else 
    {
        echo "<p>Broj $k nije prost</p>";
    }

    //alternativno
    $k = 7;
    $i = 2;
    $prost = true; //predpostavka da je broj prost, daljiv samo sa jedan i samim sobom
    while($i < $k) //    while($i <= sqrt($k) najidealniji slucaj ako se ide samo do korena kvadratnogg mozemo znati dal je prost po teorem
    {
        if($k % $i == 0)
        {
            $prost = false;
            break; //nema poterebe da se vrti do kraja da se vrti dalje i tome sluzi break nasilno prekidanje petlje
        }
        $i++;
    }

    if($prost == true)
    {
        echo "<p>Broj $k jeste prost</p>";
    }
    else
    {
        echo "<p>Broj $k nije prost</p>";
    }

    // 13 Zadatak
    $n = 20;
    $m = 1;
    $i = $n;
    $proiz = 1;          
    while ($i >= $m)
    {
        $proiz *= $i ;
        if($proiz > 10000)
        {
            echo "<p style='color:red;'>Rezultat proizvoda je $proiz</p>";
            echo "<p style='color:green;'>Poslednji broj kojim smo mnozili je $i</p>";
            break;
        }
        
        $i--;
    }
    
    // 14 Zadatak
    $prvi = 10;
    $mprvi = $prvi;
    $drugi = 20;
    if($prvi <= $drugi)
    {
        while($mprvi < $drugi)
        {
            $mprvi *= $prvi;
        }
        
    }
    else
    {
        echo "<p>GRESKA</p>";
    }
    echo "<p>$mprvi</p>";
    
    
    







?>