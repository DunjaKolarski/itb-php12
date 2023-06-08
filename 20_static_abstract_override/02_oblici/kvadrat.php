<?php

    class Kvadrat
    {
        private $a;

        public function __construct($aa)
        {
            $this->setA($aa);
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
        public function obimKvadrata()
        {
            return $this->a * 4;
        }
        public function povrsinaKvadrata()
        {
            return $this->a * $this->a;
        }
    }


        // kvadrat sa jednom stranicom 0 postoji i tu je duz zato ovde mozemo da stavimo na 0 u elsu istp i kod pravougaonika

?>