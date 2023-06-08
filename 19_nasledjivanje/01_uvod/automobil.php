<?php

    require_once "vozilo.php";
    class Automboli extends Vozilo
    {
      // klasa automobil nasledjuje sva polja i metode iz klase vozilo
      public function voziAutomobil()
      {
        // echo "<p>Automobil $this->tip ($this->boja) u pokretu</p>"; ne moze ovako sa $this jer su privatna polja a privatnim poljima moze da se pristupi DIREKTNO jedno u klasi gde su definisana

        // echo "<p>Automobil " . $this->getTip() . "(" . $this->getBoja() .") u pokretu</p>"; // mora ovako preko getera jer us polja privatna !!!

        echo "<p>Automobil $this->tip ($this->boja) u pokretu</p>"; // promenili smo polja u protected i sada moze ovako, pomocu protected mozemo da pristupimo protected poljima iz osnovne klase, ali e mozemo da pristupimo protectedu van klase

      }
    }





?>