<?php

    class Knjiga 
    {
        private $naslov;
        private $autor;
        private $godIzdanja;
        private $brojStrana;
        private $cena ;

        public function __construct($n, $a, $gI, $bS, $c)
        {
            $this->setNaslov($n);
            $this->setAutor($a);
            $this->setGodIzdanja($gI);
            $this->setBrojStrana($bS);
            $this->setCena($c);
            
        }
        public function setNaslov($n)
        {
            $this->naslov = $n;
        }
        public function setAutor($a)
        {
            $this->autor = $a;
        }
        public function setGodIzdanja($gI)
        {
            $this->godIzdanja = $gI;
        }
        public function setBrojStrana($bS)
        {
            $this->brojStrana = $bS;
        }
        public function setCena($c)
        {
            $this->cena = $c;
        }

        public function getNaslov()
        {
            return $this->naslov;
        }
        public function getAutor()
        {
            return $this->autor;
        }
        public function getGodIzdanja()
        {
            return $this->godIzdanja;
        }
        public function getBrojStrana()
        {
            return $this->brojStrana;
        }
        public function getCena()
        {
            return $this->cena;
        }
        
        public function ispis()
        {
            echo "Naslov knjige: $this->naslov, autor: $this->autor, broj strana: $this->brojStrana, godina izdanja: $this->godIzdanja, cena: $this->cena";
        }
        public function obimna()
        {
            if ($this->brojStrana > 600)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function skupa()
        {
            if ($this->cena > 8000)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function dugackoIme()
        {
            if(strlen($this->autor) > 18)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    

    $k1 = new Knjiga("A Game of Thrones", "George R. R. Martin", 1996, 694, 2000);

    $k1->ispis();
    echo "<p>Knjiga je obimna : " . ($k1->obimna() ? "Da" : "Ne") . "</p>";
    echo "<p>Knjiga je skupa : " . ($k1->skupa() ? "Da" : "Ne") . "</p>";
    echo "<p>Knjiga ima dugacko ime autora : " . ($k1->dugackoIme() ? "Da" : "Ne") . "</p>";
    echo "<hr>";

    $k2 = new Knjiga("Harry Potter and the Order of the Phoenix", "J. K. Rowling", 2003, 766, 9000);
    $k2->ispis();
    echo "<p>Knjiga je obimna : " . ($k2->obimna() ? "Da" : "Ne") . "</p>";
    echo "<p>Knjiga je skupa : " . ($k2->skupa() ? "Da" : "Ne") . "</p>";
    echo "<p>Knjiga ima dugacko ime autora : " . ($k2->dugackoIme() ? "Da" : "Ne") . "</p>";


    
?>