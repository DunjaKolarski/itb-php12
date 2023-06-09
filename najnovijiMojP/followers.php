<?php 
session_start();
if(empty($_SESSION["id"]))
{
    header("Location: index.php");
}

$id = $_SESSION["id"];
require_once "connection.php";



if(isset($_GET['friend_id'])) // da li postoji get id, ako postoji
{ 
    // zahtev za pracenje drugog korisnika, logovani za drugog
    // kako je u url zapisano tako je i ovde isto
    
    $friendId = $conn->real_escape_string($_GET["friend_id"]); //dohvatamo ga ako je podesen
    
    $q = "SELECT * FROM `followers` 
            WHERE `id_sender` = $id
            AND `id_receiver` = $friendId";
    
    $result = $conn->query($q); //izvrsenje upita
    
    if($result->num_rows == 0) //ako ne postoji takvo pracenje u bazi tada vrsimo insert
    {
        $upit = "INSERT INTO `followers`(`id_sender`, `id_receiver`)
                VALUE ($id, $friendId)";
        $result1 = $conn->query($upit); //izvrsenje upita
    }
}

if(isset($_GET['unfriend_id'])) {
    // zahtev da se drugi korisnik odprati
    $friendId = $conn->real_escape_string($_GET["unfriend_id"]);
    $q = "DELETE FROM `followers`
            WHERE `id_sender` = $id
            AND `id_receiver` = $friendId";
    $conn->query($q); //izvrsenje upita
}

    // odredjujemo koje druge korisnike prati logovan korisnik
    $upit1 = "SELECT `id_receiver` FROM `followers` WHERE `id_sender` =  $id;"; // id korsinika koje logovan korisnik prati
    $res1 = $conn->query($upit1); //pravimo niz id=eva korsinika koje nas logovan korisnik prati
    $niz1 = [];
    while($row = $res1->fetch_array(MYSQLI_NUM))
    {
        $niz1[]= $row[0]; 
    }
    
    // var_dump($niz1);

    // odredjujemo koji drugi korisnici prate logovanog korisnika
    $upit2 = "SELECT `id_sender` FROM `followers` WHERE `id_receiver` =  $id;"; 
    $res2 = $conn->query($upit2); //pravimo niz id=eva korsinika koji prate logovanog korisnika
    $niz2 = [];
    while($row = $res2->fetch_array(MYSQLI_NUM))
    {
        $niz2[]= $row[0]; 
    }
    
    // var_dump($niz2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members of Social Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once "header.php"; ?>
    <h1>See other members from our site</h1>
    <?php
        $q = "SELECT `u` . `id`, `u`. `username`, `p` . `gender` , `p` . `profile_picture`,
        CONCAT( `p` . `first_name`, ' ' , `p` . `last_name`) AS `full_name`
        FROM `users` AS `u`
        LEFT JOIN  `profiles` AS `p`
        ON `u` . `id` = `p` . `id_user`
        WHERE `u` . `id` != $id
        ORDER BY `full_name`;
        ";

        $result = $conn->query($q);
        if($result->num_rows == 0)
        {
    ?>
        <div class="error">No other users in database :( </div>
    <?php
        }
        else 
        {
            echo "<table>";
            echo "<tr><th>Picture</th><th>Name</th><th>Action</th></tr>";
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>";

                if (!empty($row['profile_picture'])) 
                {
                    echo "<img src='uploads/" . $row["profile_picture"] . "' alt='Profile Picture' width='120' height='120'>";
                } 
                else 
                {
                    $avatar = "o_avatar.png"; 
                
                    $gender = $row["gender"];
                
                    if ($gender === "m") 
                    {
                        $avatar = "m_avatar.png"; 
                    } 
                    elseif ($gender === "f") 
                    {
                        $avatar = "f_avatar.png"; 
                    }
                
                    echo "<img src='avatars/" . $avatar . "' alt='Profile Picture' width='120' height='120'>";
                }
                echo "</td><td>";
                if($row["full_name"] !== NULL)
                {
                    echo $row["full_name"];
                }
                else
                {
                    echo $row["username"];
                }
                echo "</td><td>";
                
                $friendId = $row ["id"];

                if(!in_array($friendId, $niz1))
                {
                    if(!in_array($friendId, $niz2))
                    {
                        $text = "Follow";
                    }
                    else
                    {
                        $text = "Follow back";
                    }
                    echo "<a href='followers.php?friend_id=$friendId'>$text</a>";
                }
                else
                {
                    echo "<a href='followers.php?unfriend_id=$friendId'>Unfollow</a>";
                }
                echo "</td></tr>";
            }
            echo "</table>";
        }
    ?>
    Return to <a href="index.php">home page</a>
</body>
</html>