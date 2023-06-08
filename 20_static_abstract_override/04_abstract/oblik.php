<?php

// Apstraktna klasa je klasa koja sadrzi BAREM JEDNU apstraktnu metodu
// To za posledicu ima da ne mozemo da kreiramo objekte ove klase

abstract class Oblik 
{
    private $nazivOblika;

    const TROUGAO = "Trougao";
    const PRAVOUGAONIK = "Pravougaonik";
    const KVADRAT = "Kvadrat";
    const ROMB = "Romb";

    public function __construct($n)
    {
        $this->nazivOblika = $n;
    }

    public abstract function obim();
    // ako neka klasa sadrzi apstraktnu metodu, to znaci:
    // 1) nema implementacije te metode u toj klasi
    // 2) izvedene klase MORAJU da ponude implementaciju (varijantu) te metode

    public abstract function povrsina();

    public function ispis()
    {
        echo "<p> $this->nazivOblika: " . $this->obim() . ", " . $this->povrsina() . "</p>";
    }
}


?>