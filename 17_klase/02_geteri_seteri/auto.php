<?php

    class Auto
    {
        // polja
        private $marka;
        private $boja;
        private $imaKrov;

        // metode

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

    $a1 = new Auto();

    // $a1->marka = "Audi";  // NIJE MOGUCE: polje marka je privatno polje
    $a1->setMarka("Audi");   // OVO RADI: poziva seter, a seter kontrolise kako ce da podesi vrednost
                             // odgovarajuceg polja
    $a1->setImaKrov("true");

    if($a1->getImaKrov() === true)
    {
        echo "Automobil marke " . $a1->getMarka() . " ima krov<br>"; 
    }
    elseif($a1->getImaKrov() === false)
    {
        echo "Automobil marke " . $a1->getMarka() . " nema krov<br>"; 
    }
    else
    {
        echo "Automobil marke " . $a1->getMarka() . " nema validno postavljeno polje za krov<br>"; 
    }

    // echo $a1->marka; // NIJE MOGUCE: polje marka je privatno polje
    echo $a1->getMarka();   // OVO RADI: poziva se geter za polje marka, geter vrati vrednost polja,
                            // pa onda mi ispisemo tu vrednost

    $a1->ispis();

    

?>