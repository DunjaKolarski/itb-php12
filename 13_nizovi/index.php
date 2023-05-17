<?php
    // Bez nizova
    $car1 = "BMW";
    $car2 = "Volvo";
    $car3 = "Toyota";

    // Sa nizovima
    $cars = array ("BMW", "Volvo", "Toyota"); // $cars = ["BMW", "Volvo", "Toyota"];
    // Elementi ovog niza su: "BMW", "Volvo", "Toyota"
    // Indeksi elemenata ovog niza su: 0, 1, 2
    var_dump($cars); // Za ispisivanje citavog niza
    var_dump($car1);
    echo "<hr>";

    echo "$car1";
    //echo "$cars"; niz se ne ispisuje pomocu echo pa ne radi u ovoj verziji php-a, moze samo jednom elementu odjednom
    echo "<hr>";

    print_r($cars);
    echo "<hr>";

    // Pristupanje elementima
    $prviElement = $cars[0];
    $drugiElement = $cars[1];
    $treciElement = $cars[2];
    //echo "<p>Osmi element u nizu je $cars[7]</p>"; //ne postoji element u nizu sa indeksom 7 te ce izbaciti gresku jer je taj indeks nedefinisan
    
    echo "$prviElement, $drugiElement, $treciElement";
    echo "<p>Prvi element u nizu je: $cars[0]</p>";

    // Izmena elementata se vrsi ukoliko pod tim indeksom u nizu vec postoji neki element
    $cars[1] = "Peugeot";
    print_r($cars);

    // Dodavanje elementa ce se vrsiti ukoliko pod navedenim indeksom ne postoji vec element u nizu
    $cars[30] = "Audi";
    print_r($cars);

    echo "<hr>";

    $polaznici = []; // prazan niz polaznici
    $polaznici[] = "Aleksandar";// na kraju niza dodaj
    $polaznici[] = "Uros";//  š bi brojalo kao dva karaktera zbog podesavanja(uroš) 
    $polaznici[] = "Milijana";
    $polaznici[] = "Andreja";
    $polaznici[] = "Nikola";

    var_dump($polaznici);
    echo "<br>";
    print_r($polaznici);

    $duzina = count($polaznici); // Prebrojava koliko polaznika ima tj. koliko ima elemenata u nizu
    echo "<p>U nizu ima $duzina polaznika</p>";

    // Koristicemo petlju koja ce ispisivavati jednog po jednog elementa niza da ne bi ispisivali sa vardump i prinr jer uz te funkc pise i druge stvari sem samih elemenata
    for($i = 0; $i < 4; $i++)
    {
        echo "<p>$polaznici[$i]</p>";
    }
    echo "<br>";
    for($i = 0; $i < $duzina; $i++) // da bi ispisali i Nikolu jer smo ga dodali kasnije on je  element sa indeksom 4 pa ga prethodna  for ne bi ispisala
    {
        echo "<p>$polaznici[$i]</p>";
    }

    echo "<br>";

?>