SELECT * FROM `custumers`
ORDER BY `age` DESC;

SELECT * FROM `customers`
ORDER BY `age` ASC , `number_of_visits` DESC;


SELECT * FROM `customers`
WHERE `number_of_visits` BETWEEN 10 AND 99
ORDER BY `number_of_visits` DESC 
LIMIT 2;


SELECT * FROM `customers`
WHERE `salary` BETWEEN 300 AND 500
ORDER BY `salary` ,`name` ASC
LIMIT 1;


SELECT * FROM `customers`
WHERE `salary` BETWEEN 300 AND 500
ORDER BY `salary` , `name` 
LIMIT 1;


SELECT * FROM `customers` 
WHERE `state` = "Srbija" AND `salary` = 600;


SELECT * FROM `customers` 
WHERE `name` LIKE "S%" OR `age` < 30;


SELECT * FROM `tasks`
WHERE `status` != 1 AND `priority` > 0;


SELECT * FROM `tasks` 
WHERE `start_date` >= "2019-01-01";

SELECT COUNT(`age`) 
FROM `customers`
WHERE `age` BETWEEN 30 AND 40;

SELECT COUNT(`age`) AS `broj_kupaca`
FROM `customers`
WHERE `age` BETWEEN 30 AND 40;

SELECT AVG(`number_of_visits`) AS `prosecan_broj_kupaca`
FROM `customers`;

SELECT AVG(`salary`) AS `prosecna_plata_srbije`
FROM `customers`
WHERE `state` = "Srbija";


SELECT COUNT(DISTINCT `name`) AS `broj_rezlicitih_imena`
FROM `customers`;


SELECT COUNT(DISTINCT `state`) AS `broj_razl_drzava`
FROM `customers`;

SELECT `name` 
FROM `customers`
WHERE `salary` = (SELECT MIN(`salary`) FROM `customers` )
LIMIT 1;

SELECT `name`
FROM `customers`
WHERE `age` > (SELECT AVG(`age`) FROM `customers`)
ORDER BY `name` ASC;










SELECT `name`
FROM `customers`
WHERE `salary` > (SELECT AVG(`salary`) FROM `customers` WHERE `state` = "Srbija" ) AND `state` = "Srbija";