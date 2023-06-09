<?php

abstract class Knjiga {
    private $naslov;
    private $brojStrana;
    private $cena;

    public function __construct($naslov, $brojStrana, $cena)
    {
        if(strlen($naslov) > 0 && $brojStrana >= 0 && $cena >= 0)
        {
            $this->setNaslov($naslov);
            $this->setBrStrana($brojStrana);
            $this->setCena($cena);
        }
    }
    public function getNaslov()
    {
        return $this->naslov;
    }
    public function setNaslov($naslov)
    {
        if(strlen($naslov) > 0)
        {
            $this->naslov = $naslov;
        }
        else
        {
            echo "<p>Naslov mora sadrzati barem jedan karakter</p>";
        }
        
    }
    public function getBrStrana()
    {
        return $this->brojStrana;
    }
    public function setBrStrana($brojStrana)
    {
        if($brojStrana >= 0)
        {
            $this->brojStrana = $brojStrana;
        }
        else
        {
            echo "<p>Broj strana ne moze biti manji od 0</p>";
        }
        
    }
    public function getCena()
    {
        return $this->cena;
    }
    public function setCena($cena)
    {
        if($cena >= 0)
        {
            $this->cena = $cena;
        }
        else
        {
            echo "<p>Cena ne moze biti manja od 0</p>";
        }
    }

    public function stampa()
    {
        echo "<p>Naslov knjige: " .  $this->getNaslov() . ", broj strana: " . $this->getBrStrana() . ", cena: " . $this->getCena() . "</p>";
    }

    abstract public function jedinicnaCena();
}






?>