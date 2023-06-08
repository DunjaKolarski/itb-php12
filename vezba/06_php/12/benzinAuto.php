<?php

require_once "automobil.php";

class BenzinAuto extends Automobil {
    protected $cenaBenzina;

    public function __construct($naziv, $predjenoKilometara, $potrosnja, $cenaBenzina)
    {
        parent::__construct($naziv, $tipGoriva = "BENZIN", $predjenoKilometara,$potrosnja);
        $this->cenaBenzina = $cenaBenzina;
    }
    public function getCenaBenzina()
    {
        return $this->cenaBenzina;
    }
    public function setCenaBenzina($cenaBenzina)
    {
        $this->cenaBenzina = $cenaBenzina;
    }
    public function ulozenoPara()
    {
        $ulozeno = $this->predjenoKilometara * $this->potrosnja * $this->cenaBenzina / 100;
        return $ulozeno; 
    }
}






?>