<?php


require_once "connection.php";

$sql = "CREATE TABLE IF NOT EXISTS `users`(
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(255) NOT NULL UNIQUE,
        `password` VARCHAR(255) NOT NULL,
        PRIMARY KEY(`id`) 
        ) ENGINE=InnoDB;
        ";


$sql .= "CREATE TABLE IF NOT EXISTS `profiles`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `gender` CHAR(1),
    `dob` DATE,
    `id_user` INT UNSIGNED UNIQUE DEFAULT NULL,
    PRIMARY KEY(`id`),
    FOREIGN KEY(`id_user`) REFERENCES `users`(`id`)
    ON UPDATE CASCADE ON DELETE NO ACTION
    ) ENGINE=InnoDB;
    ";

$sql .= "CREATE TABLE IF NOT EXISTS `followers`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_sender` INT UNSIGNED NOT NULL,
    `id_receiver` INT UNSIGNED NOT NULL,
    PRIMARY KEY(`id`),
    FOREIGN KEY(`id_sender`) REFERENCES `users`(`id`)
        ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY(`id_receiver`) REFERENCES `users`(`id`)
        ON UPDATE CASCADE ON DELETE NO ACTION
) ENGINE = InnoDB;
";


if($conn->multi_query($sql))
{
    echo "<p>Tables created successfully</p>";
}
else
{
    header("Location: error.php?m=" . $conn->error);
}

//dodavanje kolone u tabelu

require_once "connection.php";

$columnName = "profile_picture";

$sql = "SHOW COLUMNS FROM `profiles` LIKE '$columnName';";

$result = $conn->query($sql);

if ($result->num_rows == 0) 
{
    $alterSql = "ALTER TABLE `profiles`
                 ADD COLUMN `$columnName` TEXT AFTER `dob`;";

    if ($conn->query($alterSql)) 
    {
        echo "<p>Column added successfully</p>";
    } 
    else 
    {
        header("Location: error.php?m=" . $conn->error);
    }
} 
else 
{
    echo "<p>Column already exists</p>";
}
?>