CREATE DATABASE `biblioteka` CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

USE biblioteka;

CREATE TABLE `clanovi` (
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `adresa` VARCHAR(45),
    `telefon` VARCHAR(45) NOT NULL
) ENGINE=INNODB;

CREATE TABLE `knjige` (
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL,
    `pisac` VARCHAR(45)
) ENGINE=INNODB;

CREATE TABLE `zanr` (
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(45) NOT NULL
) ENGINE=INNODB;


CREATE TABLE `zaduzenje` (
    `id` INT PRIMARY KEY,
    `datum` DATE NOT NULL,
    `vratio` TINYINT(1) NOT NULL DEFAULT 0
) ENGINE=INNODB;

CREATE TABLE `pisac` (
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(45) NOT NULL,
    `prezime` VARCHAR(45) NOT NULL,
    `bio` TEXT,
    `god_rodj` YEAR
) ENGINE=INNODB;


CREATE TABLE `knjige_has_pisac` (
    `knjige_id` INT NOT NULL, 
    `pisac_id` INT NOT NULL
) ENGINE=INNODB;


ALTER TABLE `knjige` DROP `pisac`;


ALTER TABLE `knjige_has_pisac`
ADD CONSTRAINT `knjige_pisac_pis_fk`
FOREIGN KEY (`pisac_id`)
REFERENCES `pisac`(`id`),
ADD CONSTRAINT `knjige_pisac_knj_fk`
FOREIGN KEY (`knjige_id`)
REFERENCES `knjige`(`id`); 

CREATE TABLE `knjige_has_zanr` (
    `knjige_id` INT NOT NULL,
    `zanr_id` INT NOT NULL
) ENGINE=INNODB;

ALTER TABLE `knjige_has_zanr`
ADD CONSTRAINT `knjige_zanr_knj_fk`
FOREIGN KEY (`knjige_id`)
REFERENCES `knjige`(`id`), 
ADD CONSTRAINT `knjige_zanr_zanr_fk` -- on delete no action on update cascade moze svuda po dufoltu je restrict
FOREIGN KEY (`zanr_id`) -- imam za koju je sta on delete on update  na git hubu it bootcamp
REFERENCES `zanr`(`id`);

ALTER TABLE `knjige_has_zanr`
ADD CONSTRAINT `knjige_zanr_knj_fk`
FOREIGN KEY (`knjige_id`)
REFERENCES `knjige`(`id`),
ADD CONSTRAINT `knjige_zanr_zanr_fk`
FOREIGN KEY (`zanr_id`)
REFERENCES `zanr`(`id`);

ALTER TABLE `zaduzenje` ADD `clanovi_id` INT NOT NULL;
ALTER TABLE `zaduzenje` ADD `knjige_id` INT NOT NULL;

ALTER TABLE `zaduzenje`
ADD CONSTRAINT `z_knjige_clanovi_knj_fk`
FOREIGN KEY (`knjige_id`)
REFERENCES `knjige`(`id`),
ADD CONSTRAINT `z_knjige_clanovi_clan_fk`
FOREIGN KEY (`clanovi_id`)
REFERENCES `clanovi`(`id`);


-- da li su kljucevi jednina ili mnozina???
INSERT INTO `knjige`
VALUES 
(1 , "")



