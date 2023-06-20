<?php

// require_once "connection.php";

// // $upit = "CREATE TABLE `studenti` (
// //     `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// //     `ime` VARCHAR(50) not null,
// //     `prezime` VARCHAR(100) not null,
// //     `email` VARCHAR(100),
// //     `broj_telefona` VARCHAR(20)
// //     );";
// $upit = "CREATE TABLE IF NOT EXISTS `studenti` (
//     `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     `ime` VARCHAR(50) not null,
//     `prezime` VARCHAR(100) not null,
//     `email` VARCHAR(100),
//     `broj_telefona` VARCHAR(20)
//     );";



// if($conn->query($upit))
// {
//     echo "uspesno napravljena tabeka studenti";
// }
// else 
// {
//     echo "doslo je do greske:" . $conn->error;
// }

// $upit2 = "INSERT INTO `studenti` VALUES
// (null, 'Dunja', 'Kolarski', 'dunja@gmail.com', '0604504544')"; // moraju '' jer su okolo ""!!!!!!!!!!!!!

// if($conn->query($upit2)) {
//     echo "Uspesno napravljena tabela studenti";
// }
// else {
//     echo "doslo je do greske:" . $conn->error;
// }



// // ako opet ptovrim ovaj  preko servera ispisace eroor jer vec postoji tabela pa zato dodadjemo create table IF NOTEXISTS

// // ako je jedan upit nad bazom  koristimo query a ako hocemo unutar jednog stringa vise upita koristimo multi_query

// $upit3 = "SELECT * FROM `studenti`;";
// // 1. nacin unutar while petlje hvatamo red po red rezultata koji daje select upit
// $r = $conn->query($upit3);
// if ($r->num_rows > 0) 
// {
//     while($row = $r->fetch_assoc())
//     {
//         echo "<p>id = " . $row['id']. " ime = " . $row['ime'] . "</p>";
//     }
// }
// else 
// {
//     echo "Nema rezultata za ovaj select : " . $upit3;
// }


// // 2. nacin da uhvatimo sve redove odjednom 

// $r2 = $conn->query($upit3);
// $arr = $r2->fetch_all(MYSQLI_ASSOC);

// foreach($arr as $row) {
//     echo "<p>id = " . $row['id'] . " ime = " . $row['ime'] .  "</p>";
// }


// // zadatak sa prezentacija sa db_update


// // CREATE TABLE `db_update` (
// //     id INT(10) UNSIGNED  PRIMARY KEY,
// //     opis VARCHAR(255) NOT NULL
// // ); // pisem u myadmin


// // upite stavljamo u niz

// $upiti = [];

// $upiti[] = [
//     'id' => 1,
//     'upit' => "CREATE TABLE IF NOT EXISTS `studenti` (
//             `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//             `ime` VARCHAR(50) not null,
//             `prezime` VARCHAR(100) not null,
//             `email` VARCHAR (100),
//             `broj_telefona` VARCHAR(20)
//             );",
//     'opis' => 'Dodavanje tabele studenti'
// ];
// $upiti[] = [
//     'id' => 2,
//     'upit' => "INSERT INTO `studenti` VALUES (null, 'Elizabeta', 'Markus', 'elizabeta.markus@gmail.com','0649191125')",
//     'opis' => 'Insert u tabelu studenti'
// ];
// $upiti[] = [
//     'id' => 3,
//     'upit' => "INSERT INTO `studenti` VALUES (null, 'Stefan', 'Stanimirovic', null, null)",
//     'opis' => 'Insert u tabelu studenti'
// ];

// $izvrseni = $conn->query("SELECT `id` FROM `db_update`;"); // upit za proveru koji upiti su vec ubacenu u bazu db
// $arr = $izvrseni->fetch_all(MYSQLI_ASSOC);
// $ids = [];
// foreach($arr as $value)
// {
//     $ids[] = $values['id'];
// }// pravimo niz brojeva da bi mogli kasniej da pitamo da li je taj id vec u bazi ***** oavko oznacen taj deo

// if(count($upiti)==count($ids)){
//     echo "SVI UPITI SU VEC IZVRSENI";
// }
// foreach($upiti as $u)
// {
//     if(!in_array($u['id'], $ids)) // ***** deo
//     {
//         $r = $conn->query($u['upit']); // conection query vraca objekat
//         if($r) // ako ga vrati, ako postoji $r objekat
//         {
//             //uspesno izvrsen
//             $r2 = $conn->query("INSERT INTO  `db_update` VALUES (" . $u['id'] . ", '" . $u['opis'] . "');");
//             if(!$r2)
//             {
//                 echo "doslo je do greske: " . $conn->error;
//                 break;
//             }
//             echo "upit sa id" . $u['id'] . "je uspesno izvrsen";
//         }
//         else
//         {
//             echo "doslo je do greske: " . $conn->error;
//             break;
//         }
//     }
   
// }

// moj kod nije dobar sa casa  je ovaj:

require_once "connection.php";
/*
CREATE TABLE db_update (
    id int(10) UNSIGNED PRIMARY KEY,
    opis VARCHAR(255) NOT NULL
);
*/
$upiti = [];
$upiti[] = [
    'id' => 1,
    'upit' => "CREATE TABLE IF NOT EXISTS `studenti` (
            `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `ime` VARCHAR(50) not null,
            `prezime` VARCHAR(100) not null,
            `email` VARCHAR (100),
            `broj_telefona` VARCHAR(20)
            );",
    'opis' => 'Dodavanje tabele studenti'
];
$upiti[] = [
    'id' => 2,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Elizabeta', 'Markus', 'elizabeta.markus@gmail.com','0649191125')",
    'opis' => 'Insert u tabelu studenti'
];
$upiti[] = [
    'id' => 3,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Stefan', 'Stanimirovic', null, null)",
    'opis' => 'Insert u tabelu studenti'
];
$upiti[] = [
    'id' => 4,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Igor', 'Mitrinovic', null, null)",
    'opis' => 'Insert u tabelu studenti'
];
$izvrseni = $conn->query("SELECT id FROM `db_update`;");
$arr = $izvrseni->fetch_all(MYSQLI_ASSOC);
$ids = [];
foreach ($arr as $value) {
    $ids[]=$value['id'];
}
if(count($upiti)==count($ids)){
    echo "SVI UPITI SU VEC IZVRSENI";
}
else{
    foreach ($upiti as $u) {
        //ako mi trenutni id upita nije u nizu vec izvrsenih onda ga izvrsi
        if(!in_array($u['id'], $ids)){
            $r = $conn->query($u['upit']);
            if($r){
                //uspesno izvrsen
                $r2 = $conn->query("INSERT INTO `db_update` VALUES (" . $u['id'] . ", '" . $u['opis'] . "');");
                if(!$r2){
                    echo "doslo je do greske:" . $conn->error;
                    break;
                }
                echo "upit sa id=" . $u['id'] . "je uspesno izvrsen";
            }else{
                echo "doslo je do greske:" . $conn->error;
                break;
            }
        }
    }
}



?>