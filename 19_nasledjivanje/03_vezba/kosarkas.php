<?php

    require_once "sportista.php";
    class Kosarkas extends Sportista
    {
        protected $poeni;

        public function __construct($i, $p, $gr, $gra, $poeni)
        {
            parent::__construct($i, $p, $gr, $gra);
            $this->setPoeni($poeni);

        }

        public function getPoeni()
        {
            return $this->poeni;
        }
        public function setPoeni($poeni)
        {
            $this->poeni = $poeni;
        }
        
        public function ispisKosarkas()
        {
            echo "<p>Ime: $this->ime, prezime: $this->prezime, godina rodjenja: $this->godinaRodjenja, grad rodjenja: $this->gradRodjenja, poeni: " . implode( " ", $this->poeni) . "</p>";
        }
    }




?>