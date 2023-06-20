<?php

session_start();
if(!isset($_SESSION["id"]))
{
    header("Location: index.php");
}
 

$id = $_SESSION["id"];
$firstName = $lastName = $dob = $gender = $picture =  "";
$firstNameError = $lastNameError = $dobError = $genderError = $pictureError =  "";

$sucMessage = "";
$errMessage = "";


require_once "connection.php";
require_once "validation.php";
$profileRow = profileExists($id, $conn);

// $profileRow = false, ako profil ne postoji
// $profileRow = asocijativni niz, ako profil postoji

if($profileRow !== false)
{
    $firstName = $profileRow["first_name"];
    $lastName = $profileRow["last_name"];
    $gender = $profileRow["gender"];
    $dob = $profileRow["dob"];
    $picture = isset($profileRow["profile_picture"]) ? $profileRow["profile_picture"] : "";
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstName = $conn->real_escape_string($_POST["first_name"]);
    $lastName = $conn->real_escape_string($_POST["last_name"]);
    $gender = $conn->real_escape_string($_POST["gender"]);
    $dob = $conn->real_escape_string($_POST["dob"]);
    $picture = isset($_POST["profile_picture"]) ? $_POST["profile_picture"] : "";
    

    // Vrsimo validaciju polja
    $firstNameError = nameValidation($firstName);
    $lastNameError = nameValidation($lastName);
    $genderError = nameValidation($gender);
    $dobError = dobValidation($dob);
    
    if (!empty($picture)) 
    {
        $pictureError = pictureValidation($picture);
    } 
    else 
    {
        $pictureError = "";
    }
    // Ako je sve u redu, ubacujemo novi red u tabelu `profiles`
    if($firstNameError == "" && $lastNameError == "" &&  $genderError == "" && $dobError == "" && $pictureError == "")
    {
        $q = "";
        if($profileRow === false)
        {
            $q = "INSERT INTO `profiles`(`first_name`, `last_name`, `gender`, `dob`, `id_user`, `profile_picture`)
            VALUE
            ('$firstName', '$lastName','$gender', '$dob', $id , '$picture');";
        }
        else
        {
            $q = "UPDATE `profiles`
            SET `first_name`= '$firstName',
            `last_name`= '$lastName',
            `gender`= '$gender',
            `dob`= '$dob' ,
            `profile_picture` = '$picture'
            WHERE `id_user` = $id;";
        }

        if($conn->query($q))
        {
            // Uspesno kreiran ili editovan profil
            if($profileRow != false)
            {
                
                $sucMessage = "You have edited your profile";
            }
            else
            {
                $sucMessage = "You have create your profile";
            }
           
        }
        else
        {   // Desila se greska u upitu
            $errMessage = "Error creating profile: " . $conn->error;

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once "header.php"; ?>
    <div class="success"> 
        <?php echo $sucMessage; ?>
    </div>
    <div class="error">
        <?php echo $errMessage?>
    </div>
    <h1>Please fill the profile details</h1>
    <?php 
    if(isset($_SESSION["id"])) 
    {
        $id = $_SESSION["id"];
    
        // selektovanje info o korisniku iz baze
        $query = "SELECT `profile_picture`, `gender` FROM `profiles` WHERE `id_user` = $id";
        $result = $conn->query($query);
    
        if($result && $result->num_rows > 0) 
        {
            $row = $result->fetch_assoc();
            $profilePicture = $row["profile_picture"];
            $gender = $row["gender"];
    
            if(!empty($profilePicture))
            {
                echo '<img src="uploads/' . $row['profile_picture'] . '" alt="Profile Picture" width="120" height="120">';
            } 
            else
            {
                // biranje avatara u odnosu na pol
                $avatar = "o_avatar.png"; 
    
                if($gender === "m") 
                {
                    $avatar = "m_avatar.png"; 
                } 
                elseif($gender === "f") 
                {
                    $avatar = "f_avatar.png"; 
                }
    
                echo '<img src="avatars/' . $avatar . '" alt="Profile Picture" width="120" height="120">';
            }
        } 
        else
        {
            // korisnik nema profilnu sliku pokazi difoltnu
            $avatar = "o_avatar.png"; 
            echo '<img src="avatars/' . $avatar . '" alt="Profile Picture" width="120" height="120">';
        }
    }
    ?>
    <form action="#" method="post">
        <p>
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" name="profile_picture" id="profile_picture">
            <span class="error"><?php echo $pictureError; ?></span>
        </p>
        <p>
            <label for="first_name">First name:</label>
            <input type="text" name="first_name" id="first_name" value="<?php echo $firstName; ?>">
            <span class="error">*  <?php  echo $firstNameError; ?></span>
        </p>
        <p>
            <label for="last_name">Last_name:</label>
            <input type="text" name="last_name" id="last_name" value="<?php echo $lastName; ?>">
            <span class="error">* <?php echo $lastNameError; ?></span>
        </p>
        <p>
            <label for="gender">Gender::</label>
            <input type="radio" name="gender" id="m" value="m" <?php if($gender =="m"){echo "checked";} ?>>Male
            <input type="radio" name="gender" id="f" value="f" <?php if($gender =="f"){echo "checked";} ?>>Female
            <input type="radio" name="gender" id="o" value="o"  <?php if($gender =="o" || $gender == ""){echo "checked";} ?>>Other
            <span class="error"> <?php echo $genderError; ?></span>
        </p>
        <p>
            <label for="dob">Date of birth:</label>
            <input type="date" name="dob" id="dob" value ="<?php echo $dob; ?>">
            <span class="error"><?php echo $dobError; ?></span>
        </p>
        <p>
            <?php
            $poruka;
            if($profileRow === false)
            {
                $poruka = "Create profile";
            }
            else
            {
                $poruka = "Edit profile";
            }
            ?>
            <input type="submit" value="<?php echo $poruka; ?>">
        </p>
        <p>
            Go back to <a href="index.php">home page</a>
        </p>
        
    </form>
</body>
</html>