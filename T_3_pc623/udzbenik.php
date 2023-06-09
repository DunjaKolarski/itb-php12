<?php
require_once "knjiga.php";

class Udzbenik extends Knjiga {
    protected $tiraz;

    public function __construct($naslov,$brojStrana,$cena,$tiraz)
    {
        if($tiraz >= 0)
        {
            parent::__construct($naslov,$brojStrana,$cena);
            $this->setTiraz($tiraz);
        }
        
        
    }
    public function getTiraz()
    {
        return $this->tiraz;
    }
    public function setTiraz($tiraz)
    {
        if($tiraz >= 0)
        {
            $this->tiraz = $tiraz;
        }
        else
        {
            echo "<p>Tiraz ne moze biti manji od 0</p>";
        }
    }

    public function stampa()
    {
        echo "<p>Naslov knjige: " .  $this->getNaslov() . ", broj strana: " . $this->getBrStrana() . ", cena: " . $this->getCena() . ", tiraz: " . $this->getTiraz() . "</p>";
    }

    public function jedinicnaCena()
    {
        $jedinicaCena = $this->getCena() / $this-> getTiraz();
        return $jedinicaCena;
    }
}





?>