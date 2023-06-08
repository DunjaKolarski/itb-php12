<?php

    class Vozilo
    {
        protected $boja; // privatna polja ne mogu d abudu menjan avan klase, moramo uvesti getere  i setere konstruktor
        protected $tip;
        public function getBoja()
        {
            return $this->boja;
        }
        public function getTip()
        {
            return $this->boja;
        }
        public function setBoja($b)
        {
            $this->boja = $b;
        }
        public function setTip($t)
        {
            $this->tip = $t;
        }
        public function __construct($b, $t)
        {
            $this->setBoja($b); // - seterrima pisemo konstruktor!!!!!!!!!!!!!!!!!1
            $this->setTip($t); 
        }
        public function voziVozilo()
        {
            echo "<p>Vozilo $this->tip($this->boja) u pokretu</p>";
        }
    }
    



?>