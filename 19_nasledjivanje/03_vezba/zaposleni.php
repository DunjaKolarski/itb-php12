<?php

    require_once "osoba.php";

    class Zaposleni extends Osoba
    {
        protected $plata;
        protected $pozicija;

        public function __construct($i, $p, $g, $pl, $po)
        {
            parent::__construct($i, $p, $g);
            $this->setPlata($pl);
            $this->setPozicija($po);
        }

        public function getPlata()
        {
            return $this->plata;
        }
        public function getPozicija()
        {
            return $this->pozicija;
        }
        public function setPlata($pl)
        {
            $this->plata = $pl;
        }        public function setPozicija($po)
        {
            $this->pozicija = $po;
        }

        public function ispisZaposleni()
        {
            echo "<p>Podaci osobe su ime: ". $this->ime . ", prezime: " . $this->prezime . ", godina rodjenja: " . $this->godinaRodjenja . " , pozicija: " . $this->pozicija . ", plata: " .  $this->plata ."</p>";
        }
    }





?>