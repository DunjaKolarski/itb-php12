<?php
session_start();
if(!isset($_SESSION["id"]))
{
    header("Location: index.php");
}

$id = $_SESSION["id"];
require_once "connection.php";
require_once "validation.php";


$sucMessage = $errMessage = "";
$passwordNewError = $passwordOldError = $retypeError = "";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="vezba.php" method="POST">
        <div>
            <label for="passwordOld">Your old password:</label>
            <input type="password" name="passwordOld" id="passwordOld">
            <span class="error"><?php echo $passwordOldErr?></span>
        </div>
        <div>
            <label for="passwordNew">Your new password:</label>
            <input type="paasword" name="passwordNew" id="passwordNew">
            <span class="error"><?php echo $passwordNewErr?></span>
        </div>
        <div>
            <label for="passwordRetype">Retype your new password:</label>
            <input type="password" name="passwordRetype" id="passwordRetype">
            <span class="error"><?php echo $passwordRetypeErr?></span>
        </div>
        <div>
            <input type="submit" value="Change password">
        </div>
    </form>
</body>
</html>