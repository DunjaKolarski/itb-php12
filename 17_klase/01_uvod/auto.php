<?php

    class Auto
    {
        // polja
        var $marka; // ovo nije promenjljiva ovo je polje klase i zato ne mozemo onako dole pisati (kao sto je komentar ) u ispis 
        var $boja;
        var $imaKrov;

        function sviraj()
        {
            echo "<p>Beep! Beep!</p>";
        }
        function ispis ()
        {
            echo "<p>Automobil marke ". $this->marka . " boje : " .$this->boja;
            if ($this->imaKrov == true)
            {
                echo " ima krov";
            }
            else
            {
                echo " nema krov";
            }
            echo "</p>";
        }

        
        
    }
    //$this znaci taj objekat koji ce da pozove tu metodu

    // mozemo da kreiramo objekte klase Auto 
    $a1 = new Auto(); // prva instanca klase auto
    //var_dump($a1);
    $a1->marka = "Opel";
    $a1->boja = "plava";
    $a1->imaKrov = false;
    // $a1->kubikaza = 1600; // moze da doda ali nije dobro  dodati dekoraciju jer ga unese kao varijablu i ako slucajno pogresno napisemo def i=on ce dodati kao nedefinisano nece znati da smo pogresili u pisanju a ta vrednost koju smo hteli bice null tj prazno
    //var_dump($a1);

    $a2 = new Auto(); // druga instanca klase auto
    $a2->marka = "Peugeot";
    $a2->boja = "bela";
    $a2->imaKrov = false;
    //$a2->sediste = 5;
    //var_dump($a2);
    

    $a3 = new Auto();
    $a3->marka = "Audi";
    $a3->boja = "siva";
    $a3->imaKrov = true;

    // echo "<p>Auto marke " . $a3->marka . " boje " . $a3->boja . " ima krov " . $a3->imaKrov . "</p>";
    $a3->ispis();
    $a1->sviraj();
    $a2->sviraj();
    $a3->sviraj();

    // echo "<p>Auto marke " . $a2->marka . " boje " . $a2->boja . " ima krov " . $a2->imaKrov . "</p>";
    $a2->ispis();




?>
