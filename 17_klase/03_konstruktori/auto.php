<?php

    class Auto
    {
        // polja
        private $marka;
        private $boja;
        private $imaKrov;

        // metode

        // KONSTRUKTOR

        public function __construct($m, $b, $ik)
        {
            $this->setMarka($m);
            $this->setBoja($b);
            $this->setImaKrov(false);
        }

        // GETERI: vracaju vrednosti polja

        public function getMarka()
        {
            return $this->marka;
        }

        public function getBoja()
        {
            return $this->boja;
        }

        public function getImaKrov()
        {
            return $this->imaKrov;
        }

        // SETERI: postavljaju vrednosti polja

        public function setMarka($m)
        {
            if ($m != "")
            {
                $this->marka = $m;
            }
            else
            {
                $this->marka = "Fiat";
            }
        }

        public function setBoja($b)
        {
            $this->boja = $b;
        }

        public function setImaKrov($ik)
        {
            if($ik === true || $ik === false)
            {
                $this->imaKrov = $ik;
            }
            else
            {
                $this->imaKrov = false;
            }
        }




        private function sviraj()
        {
            echo "<p>Beep! Beep!</p>";
        }

        public function ispis()
        {
            $this->sviraj();
            echo "<p>Automobil marke " . $this->marka . " boje " . $this->boja;
            if ($this->imaKrov)
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

    // Kada se kreira klasa, obicno se na sledeci nacin implementira:
    // 1) Sva polja stavimo da su privatna,
    // 2) Za svako polje napisemo geter i seter
    //    2.1) geter: dohvata (cita) vrednost polja
    //    2.2) seter: postavlja novu vrednost polju


    // 1. kreiramo objekat
    $a1 = new Auto("BMW", "plava", false);
    
    // 2. koristimo objekat
    $a1->ispis();
    

?>