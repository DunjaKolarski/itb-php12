<?php 
session_start();
require_once "connection.php";
require_once "validation.php";

$poruka = "";
if(isset($_GET["p"]) && $_GET["p"] == "ok")
{
    $poruka = "You successfully registered,please login to continue";
}

$username = "anonymus";
if(isset($_SESSION["username"])) // da li je logovan korisnik
{
    $username = $_SESSION["username"];
    $id = $_SESSION["id"]; // id logovanog korisnika
    $row = profileExists($id, $conn);
    $m = "";

    if($row === false)
    {
        // Logovani korisnik nema profil
        $m = "Create";
    }
    else
    {   // Logovani korisnik ima profil
        $m = "Edit";
        $username = $row["first_name"] . " " . $row["last_name"];
    }
}
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php require_once "header.php"; ?>
    <header>
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block centered">
                <?php
                if(!empty($poruka))
                {
                    ?><div class="success alert alert-light" role="alert">
                    <?php echo $poruka; ?>
                    </div>
                    <?php
                }
                ?>
                <h1>Welcome, <?php echo $username; ?>, to Spacey!</h1>
                <?php if(!isset($_SESSION["username"])) { ?>
                <p>New to our site? <a href="register.php">Register here</a> to acces our site!</p> 
                <p>Already have the account? <a href="login.php">Login here</a> to contine to our site!</p>
                <?php }
                else{?>
                <p><?php echo $m; ?> a <a href="profile.php">profile</a>.</p>
                <p>See other members <a href="followers.php">here</a>.</p>
                <p><a href="logout.php">Logout</a> from our site.</p>
                <?php } ?>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Explore the Infinite Possibilities of Spacey: Connect and Discover Together!</h5>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>