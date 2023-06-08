<?php

class Automobil {
    protected $naziv;
    protected $tipGoriva;
    protected $predjenoKilometara;
    protected $potrosnja;
    
    public function __construct($naziv,$tipGoriva,$predjenoKilometara,$potrosnja)
    {
        $this->setNaziv($naziv);
        $this->setTipGoriva($tipGoriva);
        $this->setPredjenoKilometara($predjenoKilometara);
        $this->setPotrosnja($potrosnja);
    }

    public function getNaziv()
    {
        return $this->naziv;
    }
    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }
    public function getTipGoriva()
    {
        return $this->tipGoriva;
    }
    public function setTipGoriva($tipGoriva)
    {
        $this->tipGoriva = $tipGoriva;
    }
    public function getPredjenoKilometara()
    {
        return $this->predjenoKilometara;
    }
    public function setPredjenoKilometara($predjenoKilometara)
    {
        $this->predjenoKilometara = $predjenoKilometara;
    }
    public function getPotrosnja()
    {
        return $this->potrosnja;
    }
    public function setPotrosnja($potrosnja)
    {
        $this->potrosnja = $potrosnja;
    }

    public function ispis()
    {
        echo "<p>Naziv: $this->naziv, tip goriva: $this->tipGoriva,predjeno kilometara : $this->predjenoKilometara,potrosnja: $this->potrosnja </p>";
    }

}




?>