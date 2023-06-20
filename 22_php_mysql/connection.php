<?php

$host = "localhost"; //servername
$user = "admin"; //username
$pass = "admin123";
$db = "itbootcamp";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error)
{
    die("Nije uspela konekcija." . $conn->connect_error);
} // ako je doslo do greske prilikom konekcije  vise nista s ene izvrsava nakon toga
// else
// {
//     echo "Uspesno sam se konektovao."; //ako nije doslo do greske izvrsice ovo, pokrenem u brovseru i vidim sta ce izaci
// }zakomentarisali smo da bi radili dalje ako radi a ne da ispise  poruku

// da sam npr napisala pogresan password doslo bi do greske 



?>