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

$conn->select_db($db);

$sql = "CREATE TABLE IF NOT EXISTS `reziseri` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `ime` VARCHAR(255),
    `prezime` VARCHAR(255),
    `pol` CHAR(1)
) ENGINE = InnoDB";
if ($conn->query($sql) === TRUE) 
{
    echo "Tabela reziseri uspesno kreirana<br>";
} else 
{
    echo "Greska pri kreiranju tabele reziseri: " . $conn->error;
}


$sql = "CREATE TABLE IF NOT EXISTS `filmovi` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naslov` VARCHAR(255),
    `godina` SMALLINT UNSIGNED,
    `ocena` DECIMAL(6, 2),
    `reziser_id` INT UNSIGNED,
    FOREIGN KEY (`reziser_id`) REFERENCES reziseri(`id`)
) ENGINE = InnoDB";
if ($conn->query($sql) === TRUE) 
{
    echo "Tabela filmovi uspesno kreirana<br>";
} else 
{
    echo "Greska pri kreiranju tabele filmovi: " . $conn->error;
}


$sql = "CREATE TABLE IF NOT EXISTS `zanrovi` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `naziv` VARCHAR(255)
) ENGINE = InnoDB";
if ($conn->query($sql) === TRUE) 
{
    echo "Tabela Zanrovi uspesno kreirana<br>";
} else 
{
    echo "Greska pri kreiranju tabele zanrovi: " . $conn->error;
}


$sql = "CREATE TABLE IF NOT EXISTS `film_zanr` (
    `film_id` INT UNSIGNED,
    `zanr_id` INT UNSIGNED,
    PRIMARY KEY (`film_id`, `zanr_id`),
    FOREIGN KEY (`film_id`) REFERENCES filmovi(`id`),
    FOREIGN KEY (`zanr_id`) REFERENCES zanrovi(`id`)
) ENGINE = InnoDB";
if ($conn->query($sql) === TRUE) 
{
    echo "Tabela film_zanr uspesno kreirana<br>";
} else 
{
    echo "Greska pri kreiranju tabele film_zanr: " . $conn->error;
}






?>