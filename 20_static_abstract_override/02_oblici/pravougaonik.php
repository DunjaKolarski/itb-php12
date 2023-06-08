<?php

    class Pravougaonik
    {
        private $a;
        private $b;

        public function __construct($aa, $bb)
        {
            $this->setA($aa);
            $this->setB($bb);
        }
        public function getA()
        {
            return $this->a;
        }
        public function setA($aa)
        {
            if($aa > 0)
            {
                $this->a = $aa;
            }
            else
            {
                $this->a = 0;
            }
            
        }
        public function getB()
        {
            return $this->a;
        }
        public function setB($bb)
        {
            if($bb > 0)
            {
                $this->b = $bb;
            }
            else
            {
                $this->b = 0;
            }
            
        }
        public function obimPravougaonika()
        {
            return 2 * ($this->b + $this->a);
        }
        public function povrsinaPravougaonika()
        {
            return $this->a * $this->b;
        }
    }


    // pravougaonik sa jednom stranicom 0 postoji i tu je duz zato ovde mozemo da stavimo na 0 u elsu istp i kod kvadrata

?>