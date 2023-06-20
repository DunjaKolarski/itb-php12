<?php
    $host = "localhost";
    $user = "admin";
    $pass = "admin123";
    $db = "itbootcamp";

    /*
    U slucaju da niste uspeli da napravite usera zbog problema sa xampp-om
    pokusajte konekciju sa root userom bez passworda
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "itbootcamp";*/

    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error){
        die("Nije uspela konekcija." . $conn->connect_error); //die prekida izvrsenje ostatka koda isto kao exit();
    }