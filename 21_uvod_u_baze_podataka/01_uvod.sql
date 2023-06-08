-- komanda za kreiranje baze podataka:
-- CREATE DATABASE test_druga;

CREATE DATABASE test_druga CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- komanda za brisanje baze podataka:

DROP DATABASE test_druga;

-- komanda za odabir baze podataka:

USE test_baza;

-- zadatak skola

-- kreiranje baze
CREATE DATABASE skola CHARACTER SET utf16 COLLATE utf16_slovenian_ci;

-- odaberi bazu skola
USE skola;

-- kreiranje tabele student
CREATE TABLE studenti(
   ime VARCHAR(50),
   prezime VARCHAR(50)
);


-- kreiranje tabele customers
CREATE TABLE IF NOT EXISTS customers( -- ako vec ne postoji napravi tabelu
   id INT NOT NULL,
   name VARCHAR(20) NOT NULL,
   age TINYINT NOT NULL,
   address CHAR(25),
   salary DECIMAL(18, 2) DEFAULT 500
);

-- kreiranje tabele tasks
CREATE TABLE tasks(
    task_id INT UNIQUE,
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    due_date DATE,
    status TINYINT NOT NULL,
    description TEXT
);

-- -- kreiranje tabele customers sa primarnim kljucem
-- CREATE TABLE customers(
--    id INT NOT NULL,
--    name VARCHAR(20) NOT NULL,
--    age TINYINT NOT NULL,
--    address CHAR(25),
--    salary DECIMAL(18, 2) DEFAULT 500,
--    PRIMARY KEY (id) -- sta je primarni kljuc u koloni
-- ); ovo ne moze jer vec postoji tabela sa ovim nazivom

-- dodavanje primarnog kljuca u tabelu customer
ALTER TABLE `customers` ADD PRIMARY KEY(`id`); -- `` zbog razmaka??

ALTER TABLE tasks ADD PRIMARY KEY(task_id);

ALTER TABLE table_name ADD column_name datatype;

ALTER TABLE customers ADD active BOOLEAN;
ALTER TABLE customers ADD state VARCHAR(90);
ALTER TABLE customers ADD number_of_visits TINYINT;
ALTER TABLE customers ADD priority TINYINT NOT NULL;

ALTER TABLE tasks MODIFY COLUMN description VARCHAR(255) NOT NULL;

INSERT INTO customers -- kolone navodim po onom redosledu kako se nalaze u bazi jer nisam unosila columns pre values
VALUES (1, "Ana", 25, "Bubanjskih Heroja 48", 600, 1, "Srbija", 37, 0);


INSERT INTO customers(name, id, age, active, state, number_of_visits) -- primer drugaciki od gornjeg , dodavanjem sa ubacivanje kolona pre values
VALUES 
("Bojana", 2, 39, 0, "Srbija", 16),
("Dejan", 3, 31, 0, "Crna Gora", 3);

INSERT INTO customers
VALUES (4, "Ana", 25, "Bubanjskih Heroja 48", 600, 1, "Srbija", 37, 0);


ALTER TABLE tasks ADD priority TINYINT NOT NULL;

INSERT INTO tasks (task_id, title, start_date, due_date, status, description, priority)
VALUES
(1, "Čas iz ITBootcampa", "2023-06-02", "2023-06-02", 1, "Čas iz baza podataka", 1),
(2, "Setnja", "2023-06-01", "2023-06-01", 1, "Lagana setnja", 0),
(3, "Uradi domaci zadatak", "2023-06-03", NULL, 1, "Domaci zadatak iz SQL-a", 1);




