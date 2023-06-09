<?php

require_once "knjiga.php";

class ZbirkaZadataka extends Knjiga {
    protected $brojZadataka;

    public function __construct($naslov, $brojStrana, $cena, $brojZadataka)
    {
        if($brojZadataka >= 0)
        {
            parent::__construct($naslov,$brojStrana,$cena);
            $this->setBrojZadataka($brojZadataka);
        }

    }
    public function getBrojZadataka()
    {
        return $this->brojZadataka;
    }
    public function setBrojZadataka($brojZadataka)
    {
        if($brojZadataka >= 0)
        {
            $this->brojZadataka = $brojZadataka;
        }
        else
        {
            echo "<p>Broj zadataka ne moze biti manji od 0</p>";
        }
    }
    public function stampa()
    {
        echo "<p>Naslov knjige: " .  $this->getNaslov() . ", broj strana: " . $this->getBrStrana() . ", cena: " . $this->getCena() . " , broj zadataka: " . $this->getBrojZadataka() . "</p>";
    }

    public function jedinicnaCena()
    {
        $prosecnanBrojZadatakaPoStranici = $this->getBrojZadataka() / $this->getBrStrana();
        $jedinicaCena = $this->getCena() / $prosecnanBrojZadatakaPoStranici;
        return $jedinicaCena;
    }
}



?>