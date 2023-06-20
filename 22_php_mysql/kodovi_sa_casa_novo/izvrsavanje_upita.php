<?php
require_once "connection.php";

$upit1 = "CREATE TABLE IF NOT EXISTS `studenti` (
    `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `ime` VARCHAR(50) not null,
    `prezime` VARCHAR(100) not null,
    `email` VARCHAR (100),
    `broj_telefona` VARCHAR(20)
    );";

// metoda query vraca objekat ukoliko je izvrsen upit
$result = $conn->query($upit1);
if($result){
    echo "<p style='color:green'>Uspesno izvrsen UPIT1</p>";
}else{
    echo "<p style='color:red'>Doslo je do greske " . $conn->error . "</p>";
}

$upit2 = "SELECT * FROM `studenti`;";
$result2 = $conn->query($upit2);

if($result2){ //proveravamo prvo da li je upit izvrsen
    //ukoliko je izvrsen, pomocu num_rows proveravamo da li je select upit vratio neki red
    if($result2->num_rows>0){ 
        //pomocu while i fetch_assoc prolazimo red po red i red pretvaramo u asocijativni niz $row
        //kljucevi u asocijativnom nizu su nazivi kolona u tabeli studenti jer nam select glasi SELECT * FROM `studenti`
        while($row = $result2->fetch_assoc()){
            echo "<p> id=".$row['id']." ime=".$row['ime']."</p>";
        }
    }else{
        echo "nema rezultata za ovaj select: ".$upit2;
    }
    echo "<hr>";
    //2. nacin da uhvatimo sve redove od jednom pomocu metode fetch_all
    $result3 = $conn->query($upit2);
    $arr = $result3->fetch_all(MYSQLI_ASSOC);
    //$arr = [['id'=>1, 'ime'=>'Elizabeta'], ['id'=>2, 'ime'=>'Elizebata']...];
    // prolaz kroz rezultat upita radimo pomocu for ili foreach petlje
    foreach ($arr as $row) {
        echo "<p> id=".$row['id']." ime=".$row['ime']."</p>";
    }
}else{
    echo "<p style='color:red'>Doslo je do greske: " . $conn->error . "</p>";
}

echo "<hr>";
$upit3 = "SELECT id, CONCAT(`ime`,' ',`prezime`) as `ime_prezime` FROM `studenti`;";
$result = $conn->query($upit3);
$arr = $result->fetch_all(MYSQLI_ASSOC);
foreach ($arr as $row) {
    echo "<p> id=".$row['id']." ime=".$row['ime_prezime']."</p>";
}
echo "<br><br><br><br><br><br><br><br><br><br><br>";