<?php
$host = "localhost"; 
$user = "admin"; 
$pass = "admin123";
$db = "videoteka";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error)
{
    die("Nije uspela konekcija." . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS `db_update` (
    `id` int(10) AUTO_INCREMENT PRIMARY KEY,
    `id_reziser` int(10) UNSIGNED ,
    `id_filmovi` int(10) UNSIGNED ,
    `id_zanr` int(10) UNSIGNED 
);";

$conn->query($sql);

// u db_update su strukturne promene samo: insert alter table itd ali create ne, i u sustini ne bi ni insert pisali vec insert radi korisnik

// reziseri
$upitiReziser = [];

$upitiReziser[] = [
    "id_reziser" => 1,
    "upit" =>  "INSERT INTO `reziseri` (ime, prezime, pol)
                VALUES 
                ('Simon', 'West', 'M');"
];
$upitiReziser[] = [
    "id_reziser" => 2,
    "upit" =>  "INSERT INTO `reziseri` (ime, prezime, pol)
                VALUES 
                ('Jan', 'de Bont', 'M');"
];
$upitiReziser[] = [
    "id_reziser" => 3,
    "upit" =>  "INSERT INTO `reziseri` (ime, prezime, pol)
                VALUES 
                ('James', 'Cameron', 'M');"
];
$upitiReziser[] = [
    "id_reziser" => 4,
    "upit" =>  "INSERT INTO `reziseri` (ime, prezime, pol)
                VALUES 
                ('Keenen Ivory', 'Wayans', 'M');"
];



$izvrseni = $conn->query("SELECT id_reziser FROM `db_update`;");
$arr = $izvrseni->fetch_all(MYSQLI_ASSOC);
$idsR = [];
foreach ($arr as $value) 
{
    $idsR[]=$value['id_reziser'];
}
if(count($upitiReziser)==count($idsR))
{
    echo "SVI UPITI SU VEC IZVRSENI";
}
else
{
    foreach ($upitiReziser as $u) 
    {
        //ako mi trenutni id upita nije u nizu vec izvrsenih onda ga izvrsi
        if(!in_array($u['id_reziser'], $idsR))
        {
            $r = $conn->query($u['upit']);
            if($r)
            {
                //uspesno izvrsen
                $r2 = $conn->query("INSERT INTO `db_update` (`id_reziser`) VALUES (" . $u['id_reziser'] . ");");
                if(!$r2)
                {
                    echo "doslo je do greske:" . $conn->error;
                    break;
                }
                echo "upit sa id=" . $u['id_reziser'] . "je uspesno izvrsen";
            }
            else
            {
                echo "doslo je do greske:" . $conn->error;
                break;
            }
        }
    }
}

// filmovi 

$upitiFilmovi = [];

$upitiFilmovi[] = [
    "id_filmovi" => 1,
    "upit" =>  "INSERT INTO `filmovi` (`naslov`, `godina`, `ocena`, `reziser_id`)
                VALUES 
                ('Lara Croft: Tomb Raider', 2001, 5.7, 1);"
];
$upitiFilmovi[] = [
    "id_filmovi" => 2,
    "upit" =>  "INSERT INTO `filmovi` (`naslov`, `godina`, `ocena`, `reziser_id`)
                VALUES 
                ('Lara Croft: Tomb Raider – The Cradle of Life', 2003, 5.5, 2);"
];
$upitiFilmovi[] = [
    "id_filmovi" => 3,
    "upit" =>  "INSERT INTO `filmovi` (`naslov`, `godina`, `ocena`, `reziser_id`)
                VALUES 
                ('Avatar', 2009, 7.9, 3);"
];
$upitiFilmovi[] = [
    "id_filmovi" => 4,
    "upit" =>  "INSERT INTO `filmovi`(`naslov`, `godina`, `ocena`, `reziser_id`)
                VALUES 
                ('Avatar: The Way of Water', 2022, 7.7, 3);"
];
$upitiFilmovi[] = [
    "id_filmovi" => 5,
    "upit" =>  "INSERT INTO `filmovi`(`naslov`, `godina`, `ocena`, `reziser_id`)
                VALUES 
                ('White Chicks', 2004, 5.7, 4);"
];



$izvrseni = $conn->query("SELECT `id_filmovi` FROM `db_update`;");
$arr = $izvrseni->fetch_all(MYSQLI_ASSOC);
$idsF = [];
foreach ($arr as $value) 
{
    $idsF[]=$value['id_filmovi'];
}
if(count($upitiFilmovi)==count($idsF))
{
    echo "SVI UPITI SU VEC IZVRSENI";
}
else
{
    foreach ($upitiFilmovi as $u) 
    {
        //ako mi trenutni id upita nije u nizu vec izvrsenih onda ga izvrsi
        if(!in_array($u['id_filmovi'], $idsF))
        {
            $r = $conn->query($u['upit']);
            if($r)
            {
                //uspesno izvrsen
                $r2 = $conn->query("INSERT INTO `db_update` VALUES (" . $u['id_filmovi'] . ");");
                if(!$r2)
                {
                    echo "doslo je do greske:" . $conn->error;
                    break;
                }
                echo "upit sa id=" . $u['id_filmovi'] . "je uspesno izvrsen";
            }
            else
            {
                echo "doslo je do greske:" . $conn->error;
                break;
            }
        }
    }
}

// filmovi 

$upitiZanr = [];

$upitiZanr[] = [
    "id_filmovi" => 1,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (1, 1);"
];

$upitiZanr[] = [
    "id_filmovi" => 2,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (1, 4);"
];

$upitiZanr[] = [
    "id_filmovi" => 3,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (2, 1);"
];

$upitiZanr[] = [
    "id_filmovi" => 4,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (2, 4);"
];

$upitiZanr[] = [
    "id_filmovi" => 5,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (3, 1);"
];

$upitiZanr[] = [
    "id_filmovi" => 6,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (3, 2);"
];

$upitiZanr[] = [
    "id_filmovi" => 7,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (4, 1);"
];

$upitiZanr[] = [
    "id_filmovi" => 8,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (4, 2);"
];

$upitiZanr[] = [
    "id_filmovi" => 9,
    "upit" =>  "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
         VALUES (5, 3);"
];



$izvrseni = $conn->query("SELECT `id_zanr` FROM `db_update`;");
$arr = $izvrseni->fetch_all(MYSQLI_ASSOC);
$idsZ = [];
foreach ($arr as $value) 
{
    $ids[]=$value['id_zanr'];
}
if(count($upitiZanr)==count($idsZ))
{
    echo "SVI UPITI SU VEC IZVRSENI";
}
else{
    foreach ($upitiZanr as $u) {
        //ako mi trenutni id upita nije u nizu vec izvrsenih onda ga izvrsi
        if(!in_array($u['id_zanr'], $idsZ))
        {
            $r = $conn->query($u['upit']);
            if($r)
            {
                //uspesno izvrsen
                $r2 = $conn->query("INSERT INTO `db_update` VALUES (" . $u['id_zanr'] . ");");
                if(!$r2){
                    echo "doslo je do greske:" . $conn->error;
                    break;
                }
                echo "upit sa id=" . $u['id_zanr'] . "je uspesno izvrsen";
            }
            else
            {
                echo "doslo je do greske:" . $conn->error;
                break;
            }
        }
    }
}


// $sql = "INSERT INTO `reziseri` (ime, prezime, pol)
//     VALUES ('Simon', 'West', 'M'),
//            ('Jan', 'de Bont', 'M'),
//            ('James', 'Cameron', 'M'),
//            ('Keenen Ivory', 'Wayans', 'M')";

// if ($conn->query($sql) === TRUE) 
// {
//     echo "Podaci uspesno ubaceni u tabelu reziseri<br>";
// } 
// else 
// {
//     echo "Greska pri ubacivanju podataka u tabelu reziseri: " . $conn->error;
// }


// $sql = "INSERT INTO `filmovi` (`naslov`, `godina`, `ocena`, `reziser_id`)
//     VALUES ('Lara Croft: Tomb Raider', 2001, 5.7, 1),
//            ('Lara Croft: Tomb Raider – The Cradle of Life', 2003, 5.5, 2),
//            ('Avatar', 2009, 7.9, 3),
//            ('Avatar: The Way of Water', 2022, 7.7, 3),
//            ('White Chicks', 2004, 5.7, 4)";
// if ($conn->query($sql) === TRUE) 
// {
//     echo "Podaci uspesno ubaceni u tabelu filmovi<br>";
// } 
// else 
// {
//     echo "Greska pri ubacivanju podataka u tabelu filmovi: " . $conn->error;
// }


// $sql = "INSERT INTO `zanrovi` (naziv)
//     VALUES ('Akcija'),
//            ('Drama'),
//            ('Komedija'),
//            ('Triler')";
// if ($conn->query($sql) === TRUE) 
// {
//     echo "Podaci uspesno ubaceni u tabelu zanrovi<br>";
// } 
// else 
// {
//     echo "Greska pri ubacivanju podataka u tabelu zanrovi: " . $conn->error;
// }

// $sql = "INSERT INTO `film_zanr` (`film_id`, `zanr_id`)
//     VALUES (1, 1),
//            (1, 4),
//            (2, 1),
//            (2, 4),
//            (3, 1),
//            (3, 2),
//            (4, 1),
//            (4, 2),
//            (5, 3)";
// if ($conn->query($sql) === TRUE) 
// {
//     echo "Podaci uspesno ubaceni u tabelu film_zanr<br>";
// } 
// else
// {
//     echo "Greska pri ubacivanju podataka u tabelu film_zanr: " . $conn->error;
// }


?>