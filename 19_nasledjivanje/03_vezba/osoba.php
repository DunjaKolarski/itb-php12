<?php

    class Osoba
    {
        protected $ime;
        protected $prezime;
        protected $godinaRodjenja;
        public function __construct($i, $p, $g)
        {
            $this->setIme($i);
            $this->setPrezime($p);
            $this->setGodinaRodjenja($g);
        }
        public function getIme()
        {
            return $this->ime;
        }
        public function getPrezime()
        {
            return $this->prezime;
        }
        public function getGodinaRodjenja()
        {
            return $this->godinaRodjenja;
        }
        public function setIme($i)
        {
            $this->ime = $i;
        }
        public function setPrezime($p)
        {
            $this->prezime = $p;
        }
        public function setGodinaRodjenja($g)
        {
            $this->godinaRodjenja = $g;
        }

        public function ispisOsoba()
        {
            echo "<p>Podaci osobe su ime: ". $this->ime . ", prezime: " . $this->prezime . ", godina rodjenja: " . $this->godinaRodjenja .  "</p>";
        }

    }





?>