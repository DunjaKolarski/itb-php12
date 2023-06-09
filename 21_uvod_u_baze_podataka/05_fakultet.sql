CREATE DATABASE `fakultet`CHARACTER SET utf16 COLLATE utf16_slovenian_ci;
CREATE TABLE `predmeti`(
    `id` INT PRIMARY KEY,
    `naziv` VARCHAR(30) NOT NULL,
    `smer` VARCHAR(30) NOT NULL
) ENGINE=INNODB;
CREATE TABLE `studenti`(
    `indeks` VARCHAR(20) PRIMARY KEY,
    `ime` VARCHAR(30) NOT NULL,
    `prezime` VARCHAR(30) NOT NULL
) ENGINE=INNODB;
CREATE TABLE `ispiti`(
    `id` INT PRIMARY KEY,
    `datum` DATE NOT NULL,
    `ocena` INT(2) NOT NULL
) ENGINE=INNODB;
CREATE TABLE `nastavnici`(
    `id` INT PRIMARY KEY,
    `ime` VARCHAR(30) NOT NULL,
    `prezime` VARCHAR(30) NOT NULL
) ENGINE=INNODB;
ALTER TABLE `ispiti`
    ADD `student_indeks` VARCHAR(20) NOT NULL,
    ADD `predmet_id` INT NOT NULL,
    ADD `nastavnik_id` INT NOT NULL,
    ADD FOREIGN KEY (`student_indeks`) REFERENCES `studenti`(`indeks`),
    ADD FOREIGN KEY (`predmet_id`) REFERENCES `predmeti`(`id`),
    ADD FOREIGN KEY (`nastavnik_id`) REFERENCES `nastavnici`(`id`);


INSERT INTO `predmeti`
VALUES
(1, "Engleski", null),
(2, "Srpski", null),
(3, "Filozofija", null);

INSERT INTO `studenti`
VALUES
("014/2016UV", "Dunja", "Kolarski"),
("020/2020II", "Dejan", "Popovic");

INSERT INTO `nastavnici`
VALUES
(1, "Petar", "Peric"),
(2, "Sandra", "Sandric");

INSERT INTO `ispiti`
VALUES
(1, "2022-03-05", 8, "014/2016UV", 1, 1),
(2, "2022-03-05", 10, "014/2016UV", 2, 2);
(3, "2022-03-05", 10, "020/2020II", 3, 2);

