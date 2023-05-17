<?php

function mojaFunkcija()
{
    echo "<p>Moja prva funkcija</p>";
}

// da bi se izvrisila funkcija neophpdno je da je pozovemo
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();

function mojaFunkcija2($tekst) // $tekst je parametar i stavljamo parametre kao promenljive
{
    $b = "nova promenljiva";
    global $c; //ova promenljiva se moze videti i van fun
    echo "<p>F-ja sa parametrom: $tekst</p>";
}
mojaFunkcija2("1. nacin");// parametar $tekst unet kroz poziv funkcije 
$a = "2.nacin";
$c = "globalna promenljiva"; // iako je glob mora biti def nakon funk? i funk pozvana 
mojaFunkcija2($a); //parametar $tekst unet kroz poziv funkcije kao $a

// funkcija je sama za sebe ne vidi nista sta je van nje vec samo ono sto je unutar nje i parametar koji je dobila
// $tekst u funk ona ce raditi u sebi sa parametrom koji se zove $tekst ali van nje je $a, ona prihvata parametar  od $a i smesta u promenljivu $tekst
//echo $b; // bice greska jer je $b def samo u funkciji i van nje ne vaze ona je lokalna promnljiva
// izuzetak je ako se doda global promnljivoj u  def u funkciji 

// varijable def van funkcija su globalne promenjljive

$b = "van funkcije";
mojaFunkcija2($a);
echo $b;

function ispisImena($ime, $prezime)
{
    echo "<p>Ime i prezime je: $ime $prezime</p>";
}
ispisImena("Petar", "Petrovic");
$i = "Lazar";
$p = "Lazic";
ispisImena($i, $p);
// moze i jedan i drugi nacin


function ispisImena2($ime, $prezime=null,$godine) // =null znaci da ovaj parametar nije obavezan
{
    echo "<p>Ime je: $ime ";
    if ($prezime) // provera da li smo dobili parametar $prezime koji nije obavezan
    {
        echo "a prezime je: $prezime</p>";
    }
    echo " ima godina $godine";
    echo "</p>";
}
ispisImena2("Mika", null,"58"); // bitno je da ide po redu ime prezime godina jer smo tako definisali u funkciji
ispisImena2("Mika", null, 28); // mora null da se stavi ako nije n akraju promenljiva koja nije obavezna 

/**
 * f-ja koja sabira dva broja
 * @param int $a - prvi parametar broj
 * @param int $b - drugi parametar broj
 * 
 * @return [type] - suma dva dobijena broja
 */
function zbir(int $a,int $b) //ctrl enter i iskoci ovo iznad
{
    $c = $a + $b;
    // echo "<p>$c</p>";
    return $c; 
}
zbir(3, 8);
zbir(3, "10");
//zbir(3, "a");//erorr jer ne moze da sabir intidzer sa stringom slovom

// iz ove funk ne mozemo dobiti zbor kako bi ga dalje koristili vec nam treba povratna vrednost umesto echo
// return $c znaci vrati vrednost promenljive $c
// treba da def novu promenljivu koja ce da sacuva vrednost vracenu iz promenljive $c
$pom = zbir(3, 8);// nova pom promenljiva uzima vracenu return vrednost funkcije 

echo "<p>$pom</p>";
echo zbir(3, "10");
echo "<hr>";
echo zbir(zbir(3, 5), 10);


$a = zbir(4, 9);
$b = zbir(5, 10);
$c = zbir($a, $b);

echo "<hr>";
echo $c;

echo "<hr>";
echo zbir(zbir(4, 9), zbir(5, 10));

// opis funkcija nije obavezan ali je preporucljivo

//povezivanje sa drugim php fajlovima npe funk napisemo u drugom fajlu
// include(); // ako pogresimo putanju nece izbaciti error
// require(); // izbacice error ako pogresimo putanju

// uvek funkciju definisemo pre nego je pozovemo ikao php nece praviti problemu suprotnom to nije dobro zbog zbunjivanja

echo "<hr>";
function uvecaj($vrednost, $korak)
{
	$vrednost = $vrednost + $korak;
}
$a = 10;
uvecaj($a, 2);
echo $a; // vratice 10 jer smo funkciji prosledili vrednost a samo po VREDNOSTI
echo "<hr>";
function uvecajR(&$vrednost, $korak) // prosledjujemo funkciji parametar po REFERENCI i bez obzira sto nemamo return vrednost se menja
{
	$vrednost=$vrednost+$korak;
}
uvecajR($a, 2);
echo $a; // bice 12

// Zadatak 1 
// Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.
// Pozvati funkciju i testirati njen rad.

    // function neparan($broj)
    // {
    //     echo "<p>Pocetak</p>";
    //     if ($broj % 2 == 0)
    //     {
    //         return false;
    //     }
    //     else
    //     {
    //         return true;
    //     }
    //     echo "<p>Kraj</p>"; // do ovog dela koda ni ne dodje jer udje u if i returnuje ne nastavlja dalje, napusta se funk na return
    // }

    // return napusta funkciju!!!!
    // transformacija funk da bi funkcionisalo i  echo kraj

    function neparan($broj)
    {
        //echo "<p>Pocetak</p>";
        $rez = true;
        if ($broj % 2 == 0)
        {
            $rez = false;
        }
        
        //echo "<p>Kraj</p>";
        return $rez; 
    }

    $a = -17;
    if (neparan($a))
    {
        echo "<p>Broj je neparan</p>";
    }
    else
    {
        echo "<p>Broj je paran</p>";
  
    }

    // Zadatak 2
    // Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od
    // četiri realna broja.
    //Pozvati funkcije i testirati njihov rad.

        function maks2($a, $b)
        {
            if ($a > $b)
            {
                return $a;
            }
            else
            {
                return $b;
            }
        }

        $broj1 = 150;
        $broj2 = 45;
        $veci = maks2($broj1, $broj2);
        echo "<p>Veci od brojeva $broj1 i $broj2 je: $veci</p>";

        function maks4($a, $b, $c, $d)
        {
            // $maksAB = maks2($a, $b);
            // $maksCD = maks2($c, $d);
            // $maks = maks2($maksAB, $maksCD);

            // return $maks;
            return maks2(maks2($a, $b), maks2($c, $d));
        }

        $b1 = 19;
        $b2 = 25;
        $b3 = 0;
        $b4 = 10;
        $rezultat = maks4($b1, $b2, $b3, $b4);
        echo "<p>Maksimalni od brojeva $b1, $b2, $b3, $b4 je: $rezultat</p>";

        // u funkciji mozemo pozivati druge drf funkicje ali ta funkcija koju zovemo mora da ima RETURN !!! jer ako ona ne vraca nista nece biti zamene
        // po vrednosti ne po referenci izvezbati po ref ili ne??


        // Zadatak 3
        // Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike.
        // Pozvati funkciju i testirati je za različite url adrese.

            function slika($url)
            {
                echo "<img src='$url'>";
            }

            slika("https://www.google.com/search?q=poodle&sxsrf=APwXEdeJCUszbcd8AO1b3L2kY4m9zsZyTg:1683306989098&source=lnms&tbm=isch&sa=X&ved=2ahUKEwj054eZ197-AhWt87sIHShEAbgQ_AUoAXoECAEQAw&biw=1536&bih=722&dpr=1.25#imgrc=qUFvMA3jjDtGqM");


        // Zadatak 4
        // Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. Prosleđenu reč
        // ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je
            
            function obojenaRec($boja, $tekst)
            {
                echo "<p style='color: $boja'>$tekst</p>";
            }

            obojenaRec('red', "Ovo je tekst crvene boje");
            obojenaRec('blue', "Ovo je tekst PLAVE boje");

            // nema returnau funkciji i varijabli vec direktno u pozivu funkcije se unose parametri funkcije
            // obratiti paznju na pojedinacne i duple navodnike

    // Zadatak 5
    // Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka   vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju

        function recenica1()
        {
            for ($i = 10;$i <= (10+5*5); $i += 5)
            {
                echo "<p style='font-size:{$i}px'>Recenica</p></p>";// pikseli moraju uz broj pa zbog toga idu zagrade
            }
        }

        recenica1();

    // Zadatak 6
    // Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.
            
        function recenica2($velicinaF)
        {
            echo "<p style='font-size:{$velicinaF}px'>Primer recenica</p>";
        }
        for ($i = 5; $i <= 25; $i += 5)
        {
            recenica2($i);
        }
        
    // Zadatak 7
    // Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. 
    // Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

        function aritmeticka($n, $m)
        {
            if ($n <= 0)
            {
                $suma = 0;
                $br = 0;
                for ($i = $n; $i <= $m; $i++)
                {
                    $suma += $i;
                    $br++;
                }
                $aritmetickaSr = $suma/$br;
                //echo $aritmetickaSr;
                return $aritmetickaSr;
            }
            else
            {
                echo "<p>Uneli ste pogresne podatke</p>";
            }
        }

        aritmeticka(2, 4);
        
    
    // Zadatak 8
    // Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.
    // Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

    function  aritmetickaCifre($n, $m)
    {
        $zbir = 0;
        $nBroj = 0;
        for ($i = $n; $i <= $m; $i++)
        {
            if ($i % 10 == 3)
            {
                $zbir += $i;
                $nBroj++;
            }
        }
        if ($nBroj) // zbog toga sto moze da nema tih br koji zad uslov stavljamo if i else
        {
            return $zbir / $nBroj;
        }
        else 
        {
            return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";
        }
   }

    echo aritmetickaCifre(5, 35);

    $a = 45;
    $b = 150;
    echo aritmetickaCifre($a, $b);

        

    // Zadatak 9
    // Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili,   
    // svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.
    // Napišite funkciju praksa kojoj se prosleđuju brojevi n i a i d. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi,
    // ukoliko svakog meseca budete dobijali povišicu.
    // Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).
    // lepo obj u predavanju 5.5.2023

    // 1. nacin
    function praksa($n, $a, $d)
    {
        $ukupno = $a;
        for ($i = 2; $i <= $n; $i++)
        {
            $ukupno = $ukupno + $a + $d;
        }
        return $ukupno; // $ukupno = $a + ($n -1) * ($a + $d); umesto for
    }

    // 2. nacin
    function praksa2($n, $a, $d)
    {
        $ukupno = 0;
        for ($i = 1; $i <= $n; $i++)
        {
            $ukupno = $ukupno + $a + $d;
        }
        return $ukupno - $d;// -$d jer prvi mesec nemamo povisicu // $ukupno = $n * ($a + $d) - $D; umesto for
    }


    echo "<hr>";
    $n = 10;
    $a = 1000;
    $d = 120;
    echo praksa($n, $a, $d);
    // dopuniti zadatak sa numberformat funkcijom sa koda sa casa


    // Zadatak 10
    // Napraviti niz celih brojeva. 
    // Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka.
    // Pozvati funkciju i testirati je.

    $niz = [2, 5, 7, 9];
    // function neparan($broj)
    //     {
    //         echo "<p>Pocetak</p>";
    //         $rez = true;
    //         if ($broj % 2 == 0)
    //         {
    //             $rez = false;
    //         }
            
    //         echo "<p>Kraj</p>";
    //         return $rez; 
    //     }

    foreach ($niz as $broj)
    {
        neparan($broj);
        if (neparan($broj))
        {
            echo "<p>$broj</p>";
        }
    }

    // Zadatak 11
    // Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih 
    // brojeva ima prosleđeni niz.
    // Pozvati funkciju i testirati je.

    function brojNeparnih($nizCBr)
    {
        $brBroj = 0;
        foreach ($nizCBr as $broj)
        {
            neparan($broj);
            if (neparan($broj))
                {
                    $brBroj++;
                }
        }
        return $brBroj;
    }
    echo brojNeparnih($niz);


    // Zadatak 12
    // U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. 
    //Testirati implementirani kod.


    function najnizaTemp($arr)
    {
        $minTemp = 100;
        $mindatum = "";
        $minDan = 0;
        $dan = 1; // poc od ponedeljka pa je 1
        foreach($arr as $datum => $temp)
        {
            if($minTemp > $temp)
            {
                $minTemp = $temp; // temp manja od nase predpostavke
                $minDatum = $datum;
                $minDan = $dan;
            }
            $dan++;
        }
        $dani = ['Ponedeljak', 'Utorak', 'Sreda', 'Cetvrtak', 'Petak'];
        echo "<p style='color: blue;'>Najniza temperatura je bila dana " . $dani[$minDan-1] . " " . $minDatum . " sa temperaturom " . $minTemp . "</p>";// -1 jer ide indeks od nule 
    }
    $niz = [
        '01.05.2023' => 19, //pon
        '02.05.2023' => 22, //uto
        '03.05.2023' => 18, //sre
        '04.05.2023' => 15, //cet
        '05.05.2023' => 25 //pet
    ];

    echo najnizaTemp($niz);




?>

