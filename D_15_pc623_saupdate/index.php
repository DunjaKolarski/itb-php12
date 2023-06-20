<?php
$host = "localhost"; 
$user = "admin"; 
$pass = "admin123";
$db = "videoteka";

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error)
{
    die("Nije uspela konekcija." . $conn->connect_error);
}

$sql = "SELECT DISTINCT `filmovi` . `naslov`, `reziseri` . `ime`, `reziseri` . `prezime`,
(SELECT GROUP_CONCAT(`zanrovi` . `naziv` SEPARATOR ', ')
 FROM `film_zanr`
 LEFT JOIN `zanrovi` ON `film_zanr` . `zanr_id` = `zanrovi` . `id`
 WHERE `film_zanr` . `film_id` = `filmovi` . `id`) AS `kategorije`
    FROM `filmovi` 
    LEFT JOIN `reziseri`  ON `filmovi`.`reziser_id` = `reziseri`.`id`
    LEFT JOIN `film_zanr`  ON `filmovi`.`id` = `film_zanr`.`film_id`
    LEFT JOIN `zanrovi`  ON `film_zanr`.`zanr_id` = `zanrovi`.`id`
    ORDER BY `filmovi`.`naslov` ASC";
$result = $conn->query($sql);

$sql2 = "SELECT DISTINCT `godina`
FROM `filmovi`
ORDER BY `godina` ASC";
$years_result = $conn->query($sql2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Videoteka</title>
</head>
<body>
    <?php
    if ($result->num_rows > 0) 
    {
        echo "<h2>Filmovi:</h2>";
        echo "<table>
                <tr>
                    <th>Naslov</th>
                    <th>Reziser</th>
                    <th>Zanr</th>
                </tr>";
        while ($row = $result->fetch_assoc()) 
        {
            echo "<tr>
                    <td>".$row["naslov"]."</td>
                    <td>".$row["ime"]." ".$row["prezime"]."</td>
                    <td>".$row["kategorije"]."</td>
                </tr>";
        }
        echo "</table>";
    } 
    else 
    {
        echo "Nema rezultata";
    }


    if ($years_result->num_rows > 0) 
    {
        while ($year_row = $years_result->fetch_assoc()) 
        {
            $year = $year_row["godina"];
            echo "<h2>Filmovi iz $year:</h2>";

            $sql3 = "SELECT `filmovi`.`naslov`, `reziseri`.`ime`, `reziseri`.`prezime`
            FROM `filmovi`
            LEFT JOIN `reziseri` ON `filmovi`.`reziser_id` = `reziseri`.`id`
            WHERE `filmovi`.`godina` = $year
            ORDER BY `reziseri`.`ime` ASC";
            $films_result = $conn->query($sql3);

            if ($films_result->num_rows > 0) 
            {
                echo "<table>
                        <tr>
                            <th>Naslov filma</th>
                            <th>Reziser</th>
                        </tr>";
                while ($film_row = $films_result->fetch_assoc()) 
                {
                    echo "<tr>
                            <td>".$film_row["naslov"]."</td>
                            <td>".$film_row["ime"]." ".$film_row["prezime"]."</td>
                        </tr>";
                }
                echo "</table>";
            } 
            else 
            {
                echo "Nema rezultata";
            }
        }
    } 
    else 
    {
        echo "Nema rezultata";
    }

    ?>

</body>
</html>