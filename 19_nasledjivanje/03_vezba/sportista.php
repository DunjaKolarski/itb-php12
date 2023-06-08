<?php

    require_once "osoba.php";
    class Sportista extends Osoba
    {
        protected $gradRodjenja;
        
        public function __construct($i, $p, $gr, $gra)
        {
            parent::__construct($i, $p, $gr);
            $this->setGradRodjenja($gra);

        }
        public function getGradRodjenja()
        {
            return $this->gradRodjenja;
        }
        public function setGradRodjenja($gra)
        {
            $this->gradRodjenja = $gra;
        }
    }






?>