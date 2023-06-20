<?php
    $host = "localhost";
    $user = "admin";
    $pass = "admin123";
    $db = "vezba";

    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error)
    {
        die("nije uspela konekcija." . $conn->connect_error); 
    }



?> 