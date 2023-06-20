<?php 
session_start();
if(empty($_SESSION["id"]))
{
    header("Location: index.php");
}

$id = $_SESSION["id"];
require_once "connection.php";

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
                echo "<a href='follow.php?friend_id=$friendId'>Follow</a>";
                echo "&nbsp";
                echo "<a href='unfollow.php?friend_id=$friendId'>Unfollow</a>";
                echo "</td></tr>";
                
            }
            echo "</table>";
        }
    ?>
    Return to <a href="index.php">home page</a>
</body>
</html>