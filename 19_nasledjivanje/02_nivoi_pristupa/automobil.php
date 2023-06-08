<?php

    require_once "vozilo.php";

    class Automobil extends Vozilo
    {
        private $brojVrata;
        public function __construct($j, $z, $p, $bv)
        {
            // $this->javnoPolje = $j;
            // $this->zasticenoPolje = $z;
            // $this->privatnoPolje = $p;
            // $this->brojVrata = $bv; ponavlja se kod ne treba to raditi radicemo ovo sl nedelje na koji nacin ??

            // na nacin pozovi konstruktor iz  OSNOVNE klase vozilo da postavi polja iz te klase!!!!!!
            parent::__construct($j, $z, $p); // IZ RODITELJA POZOVI KONSTRUKTOR!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $this->brojVrata = $bv;



        }
        public function ispisAuto()
        {
            $this->ispis(); // mozemo da pozovemo metodu iz osnovne klase te na taj nacin pna pristupa i javnom i zasticenom i privatnom polju 
            echo  "<p>" . $this->javnoPolje . " " . $this->zasticenoPolje //. " " . $this->privatnoPolje - ne mozemo da pristupimo privatnom polju iz osnovne klas ena ovaj nacin pa smo ga zakomentarisali
            .  " " .$this->brojVrata . "</p>";
        }
    }




?>