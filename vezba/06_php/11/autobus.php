<?php
// 11

class Autobus {
    protected $registarskiBrojA;
    protected $brSedista;

    public function __construct($registarskiBrojA,$brSedista)
    {
        $this->registarskiBrojA = $registarskiBrojA;
        $this->brSedista = $brSedista;
    }

    public function getRegistarskiBroj()
    {
        return $this->registarskiBrojA;
    }

    public function setRegistarskiBroj($registarskiBrojA)
    {
        $this->registarskiBrojA = $registarskiBrojA;
    }
    public function getBrojSedista()
    {
        return $this->brSedista;
    }
    public function setBrojSedista($brSedista)
    {
        $this->brSedista = $brSedista;
    }

    public function ispis()
    {
        echo "Broj sedista: $this->brSedista<br>Registarski broj: $this->registarskiBrojA";
    }
}


?>