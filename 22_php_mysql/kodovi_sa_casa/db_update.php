<?php
require_once "connection.php";

//ideja je da u tabeli db_update cuvamo podatke o izvrsenim upitima kako se oni ne bi ponovo izvrsili,
//a da u nizu $upiti dodajemo upite koje je potrebno izvrsiti nad bazom podatak ali da se obezbedimo da se oni izvrse samo jednom

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

//treba da napracimo niz ID-jeva upita koji su izvrseni kako bi pomocu php f-je in_array() proverili da li upit do kog smo dosli prilikom prolaza kroz niz $upiti vec izvrsen
$izvrseni = $conn->query("SELECT id FROM `db_update`;");
$arr = $izvrseni->fetch_all(MYSQLI_ASSOC); //ovaj niz izgleda [['id'=>1], ['id'=>2], ['id'=>3], ...] a nama treba [1, 2, 3, ...]
$ids = [];
foreach ($arr as $value) {
    $ids[]=$value['id'];
}

if(count($upiti)==count($ids)){
    echo "SVI UPITI SU VEC IZVRSENI";
}
else{
    foreach ($upiti as $u) {
        //upit se izvrsava ako njegov id nije u nizu vec izvrsenih upita $ids
        if(!in_array($u['id'], $ids)){
            $r = $conn->query($u['upit']);
            if($r){
                //uspesno izvrsen upisi podatak u db_update da je upit izvrsen
                $r2 = $conn->query("INSERT INTO `db_update` VALUES (" . $u['id'] . ", '" . $u['opis'] . "');");
                if(!$r2){
                    echo "doslo je do greske:" . $conn->error;
                    break;
                }
                echo "<p style='color:green'>upit sa id=" . $u['id'] . "je uspesno izvrsen</p>";
            }else{
                echo "<p style='color:red'>doslo je do greske:" . $conn->error . "</p>";
                break;
            }
        }
    }
}