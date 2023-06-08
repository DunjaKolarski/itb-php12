<?php

    class Trougao
    {
        private $a;
        private $b;
        private $c;
        public function __construct($aa, $bb, $cc)
        {
            if($aa > 0 && $bb > 0 && $cc > 0  && $aa + $bb > $cc && $aa + $cc > $bb && $bb + $cc > $aa) // svih sest uslova moraju da vaze !! u ISTO VREME jer da bi bio trougao moramo da ispunimo bas sve uslove
            {
                $this->a = $aa; // ne radimo preko setera objasnjenje u videu predavanja, jer ako uradimo samo preko setera sa tim da bude seter velju veci od 0 moze da dodje do toga da ne budu ispunjeni svi uslovi ako neko uzme preko setera da promeni vrednost neke stranice; moramo i u seteru da postavimo svih 6 uslova!!!!!!!!!!!!!!!! dakle i u seteru i u konstruktu!!!!
                $this->b = $bb;
                $this->c = $cc;
            }
            else
            {
                $this->a = 0;
                $this->b = 0;
                $this->c = 0;
            }
            
        }
        public function getA() 
        {
            return $this->a;
        }
        public function setA($aa)
        {
            if($aa > 0 && $aa + $this->b > $this->c && $aa + $this->c > $this->b && $this->b + $this->c > $aa)
            {
                $this->a = $aa;
            }
            else
            {
                echo "<p>Ne moze da se promeni vrednost stranice a</p>";
            }
            
        }
        public function getB()
        {
            return $this->b;
        }
        public function setB($bb)
        {
            if($bb > 0 && $this->a + $bb > $this->c && $this->a + $this->c > $bb && $bb + $this->c > $this->a)
            {
                $this->b = $bb;
            }
            else
            {
                echo "<p>Ne moze da se promeni vrednost stranice b</p>";
            }
            
        }
        public function getC()
        {
            return $this->c;
        }
        
        public function setC($cc)
        {
            if($cc > 0  && $this->a + $this->b > $cc && $this->a + $cc > $this->b && $this->b + $cc > $this->a)
            {
                $this->c = $cc;
            }
            else
            {
                echo "<p>Ne moze da se promeni vrednost stranice c</p>";
            }
            
        }

        public function obimTrougla()
        {
            return $this->a + $this->b + $this->c;
        }
        public function povrsinaTrougla()
        {
            return sqrt((($this->a + $this->b + $this->c) / 2) * ((($this->a + $this->b + $this->c) / 2) - $this->a) * ((($this->a + $this->b + $this->c) / 2) - $this->b) * ((($this->a + $this->b + $this->c) / 2) - $this->c));
        }
        
    }



    // pre su istu promenu radili konstruktor i seter sto sada nije slucaj!! zato ne pozivamo seter u konstruktoru ,vec seter menja vec unetu vrednos po uslovu , konstruktor postavlja prve vrednosti po uslovima!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! ima objasnjeno u predavanju videu
    // pre nisu tri vrednosti zavisile jedna od druge i zbog toga smo mogli pozivati setere u konstruktoru ali sada zavise pa ne moze tako
?>