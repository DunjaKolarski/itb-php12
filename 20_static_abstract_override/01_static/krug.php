<?php

    class Krug
    {
        protected $r;
        const PI = 3.14 ; // konstantna vrednost koja ne moze posle da se menja, njoj se ODMAH ZADAJE I VREDNOST zbog toga ,KONSTANTA NEMA DOLAR I PISE SE VELIKIM SLOVIMA
        // konstanta naravno NEMA getere setere constrct

        private static $pi = self::PI; // postavljanje statickog polja pi na defolutnu vrednost konstatu PI na ovaj nacin mozemo polju pi da pristupimo i promenimo vrednost
        private static $brojDecimala = 2;
        private static $brojKrugova = 0;

        public function __construct($rr)
        {
            self::$brojKrugova++; // da se br krugova poveca svaki put kad napravimo novi krug , da bi testirali stavicemo u pablik oa vratiti u private broj krugova gore ali mozemo preko GETERA kad je private ima primer na index.php BITNO JE DA BUDE STATICKI GETER I SETER!!!
            $this->setR($rr);
        }
        public static function getBrojKrugova()
        {
            return self::$brojKrugova;
        }
        public static function setPi($vr) // seteri sluze da bi iskontrolisali vrednost polja, za static polja moramo napraviti static funkciju
        {
            self::$pi = $vr;
        }
        public static function getPi() 
        {
            return self::$pi;
        }
        public static function setBrojDecimala($br)
        {
            self::$brojDecimala = $br;
        }
        public static function getBrojDecimala()
        {
            return self::$brojDecimala;
        }
        public function getR()
        {
            return $this->r;
        }
        public function setR($rr)
        {
            if($rr >= 0)
            {
                $this->r = $rr;
            }
            else
            {
                $this->r = 0;
            }
        }

        public function obimKruga()
        {
            return round(2 * $this->r * self::$pi, self::$brojDecimala); // ne pisem this jer PI nije karakteristika nekog objekta vec cele klase!! moze da pise i KRUG ali posto smo u krug klasi pisemo self jer misli sama na sebe 
        }
        public function povrsinaKruga()
        {
            return round(($this->r ** 2) * self::$pi, self::$brojDecimala); // menjamo u $pi zbog statix=c vrednosti $pi
        }
    }

    // broj decimala smo na kraju dodavali objasnjenje je na videu, u sustini stavljamo $broj decimala static polje
    // i koristimo ga u okvriu povsine i obima kruga kroz funkciju round!!!!!!!!!!!!!!!!!!!!!!

    // pravimo mehanizam da se broje objekti tj da se vodi evidencija toga : dodajemo private static $brKrugova


?>