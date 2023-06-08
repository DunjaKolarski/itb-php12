<?php

    class Trougao
    {
        private $a;
        private $b;
        private $c;
        private static function uslovZaTrougao($aa, $bb, $cc)
        {
            return ($aa > 0 && $bb > 0 && $cc > 0  && $aa + $bb > $cc && $aa + $cc > $bb && $bb + $cc > $aa);
        }
        public function __construct($aa, $bb, $cc)
        {
            if(self::uslovZaTrougao($aa, $bb, $cc)) // svih sest uslova moraju da vaze !! u ISTO VREME jer da bi bio trougao moramo da ispunimo bas sve uslove
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
            if(self::uslovZaTrougao($aa, $this->b, $this->c))
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
            if(self::uslovZaTrougao($bb, $this->a, $this->c))
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
            if(self::uslovZaTrougao($cc, $this->a, $this->b))
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
            $s = $this->obimTrougla() / 2;
            $p = sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
            return $p;
        }
        
    }

?>