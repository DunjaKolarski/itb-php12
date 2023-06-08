<?php

require_once "automobil.php";

class DizelAuto extends Automobil {
    protected $cenaDizela;

    public function __construct($naziv, $predjenoKilometara, $potrosnja, $cenaDizela)
    {
        parent::__construct($naziv,$tipGoriva = "DIZEL",$predjenoKilometara,$potrosnja);
        $this->cenaDizela = $cenaDizela;

    }
    public function getCenaDizela()
    {
        return $this->cenaDizela;
    }
    public function setCenaDizela($cenaDizela)
    {
        $this->cenaDizela = $cenaDizela;
    }

    public function ulozenoPara()
    {
        $ulozeno = $this->predjenoKilometara * $this->potrosnja * $this->cenaDizela / 100;
        return $ulozeno; 
    }
}


?>