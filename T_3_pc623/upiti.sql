

CREATE DATABASE `store` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

USE `store`;

CREATE TABLE `categories` (
    `id` INT PRIMARY KEY,
    `category_name` VARCHAR(170) NOT NULL,
    `description`  CHAR(200)
) ENGINE=INNODB;

CREATE TABLE `products` (
    `id` INT PRIMARY KEY,
    `product_name` VARCHAR(200) NOT NULL,
    `price` DECIMAL(10,2) DEFAULT 0
) ENGINE=INNODB;

CREATE TABLE `product_categories` (
    `id` INT PRIMARY KEY,
    `id_product` INT,
    `id_category` INT,
    FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
    FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`)
) ENGINE=INNODB;


INSERT INTO `categories`
VALUES
(1 , "Decije igracke", "Odeljenje decijih igracaka , za decu svih uzrasta"),
(2 , "Tehnika", "Odeljenje svih vrsta tehnickih uredjaja(televizori,bela tehnika,mali kucni aparati)"),
(3 , "Hrana", "Odeljenje namirnica");

INSERT INTO `products`
VALUES 
(1, "Barbie lutka", 2000),
(2, "Plisani meda", 1500),
(3, "Masina za ves", 50000),
(4, "Mleko", 200),
(5, "Kafa", 1000);


INSERT INTO `product_categories`
VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 3),
(5, 5, 3);


SELECT DISTINCT * FROM `categories`
ORDER BY `category_name`;

SELECT * FROM `products`
WHERE `price` > (SELECT AVG(`price`) FROM `products`);

INSERT INTO `categories`
VALUES 
(4 , "Garden", "Odeljenje namestaja i biljaka za bastu");

INSERT INTO `products`
VALUES
(6, "Bazen", 20000),
(7, "Ljuljaska", 15000),
(8, "Japanska tresnja", 13000);

INSERT INTO `product_categories`
VALUES
(6, 6, 4),
(7, 7, 4),
(8, 8, 4);


SELECT * FROM `products`
LEFT JOIN `product_categories`  ON `products` . `id` = `product_categories` . `id_product`  
LEFT JOIN  `categories`  ON  `categories` . `id` = `product_categories` . `id_category`
WHERE `categories` . `category_name` = "Garden"
AND `products` . `price` = (SELECT MAX(`price`) FROM `products`
LEFT JOIN `product_categories`  ON `products` . `id` = `product_categories` . `id_product`  
LEFT JOIN  `categories`  ON  `categories` . `id` = `product_categories` . `id_category`
WHERE  `categories` . `category_name` = "Garden")
LIMIT 1;