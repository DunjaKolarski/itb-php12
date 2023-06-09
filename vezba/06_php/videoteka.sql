CREATE DATABASE `videoteka` CHARACTER SET `utf16` COLLATE `utf16_slovenian_ci`;

USE `videoteka`;

CREATE TABLE `filmovi`(
    `id` INT PRIMARY KEY,
    `naslov` VARCHAR(255) NOT NULL,
    `reziser` VARCHAR(255) NOT NULL,
    `god_izdavanja` YEAR NOT NULL,
    `zanr` VARCHAR(255) NOT NULL,
    `ocena` DECIMAL
);


INSERT INTO `filmovi`
VALUES 
(1, "Avatar: The Way of Water", "James Cameron", 2022, "Akcija", 7.7),
(2, "Lara Croft: Tomb Raider", "Simon West", 2001, "Akcija", 5.7),
(3, "Inception", "Christopher Nolan", 2010, "Akcija", 8.8),
(4, "Home Alone", "Chris Columbus", 1990, "Komedija", 7.7),
(5, "Mi Nismo Anđeli", "Srđan Dragojević", 1992, "Komedija", 8.3),
(6, "Kako je propao rokenrol", "Zoran Pezo", 1989, "Komedija", 8.1);

SELECT * FROM `filmovi`
WHERE `zanr` IN ("tragedija","komedija","drama");

SELECT * FROM `filmovi` 
WHERE `ocena` BETWEEN 5 AND 10;

SELECT DISTINCT `reziser`  FROM `filmovi`
WHERE `godina_izdavanja` = 2003
ORDER BY `reziser` ASC;

SELECT * FROM `filmovi`
WHERE `zanr` != "komedija";

SELECT * FROM `filmovi`
WHERE `ocena` = (SELECT MAX(`ocena`) FROM `filmovi`)
LIMIT 1;

SELECT * FROM `filmovi` 
WHERE `zanr` = "drama" AND 
`ocena` = (SELECT MAX(`ocena`) FROM `filmovi` WHERE `zanr` = "drama");


SELECT `reziser` 
FROM `filmovi`
ORDER BY `ocena` DESC
LIMIT 3;

SELECT DISTINCT `zanr`
FROM `filmovi`;

SELECT CONCAT(`naslov`,"(", `reziser`, ")") AS `Naslov(Reziser)`
FROM `filmovi`;

SELECT CONCAT(`naslov`,"(", `reziser`, ")", "-", `god_izdavanja`) AS `Naslov(Reziser) - Godina izdavanja`
FROM `filmovi`
ORDER BY `god_izdavanja`;

SELECT AVG(`ocena`) AS `Prosecna ocena filmova izdatih nakon 2000. godine`
FROM `filmovi`
WHERE `god_izdavanja` > 2000;
