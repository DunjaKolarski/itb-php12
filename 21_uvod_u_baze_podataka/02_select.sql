-- citanje podataka iz baze

SELECT * FROM `tasks`;

SELECT `title`, `start_date`,`due_date` FROM `tasks`;

SELECT `name`, `age`, `address` FROM `customers`;

-- od sad ovako pisati izmedju bektikova !!!!!!!!!!!!! obavezno je!!

-- dohvati sva razlicita imena koja imaju nasi potrosaci 
-- brisu se duplikati ali mora citav red da se poklopi da bi se izbrisao duplikat !!!!!!

SELECT DISTINCT `name` from `customers`;

SELECT DISTINCT `name`, `age`, `address` FROM `customers`;

SELECT DISTINCT `salary` FROM `customers`;

-- WHERE sluzi za filtriranje podataka , vraca sve redove koji zadovoljavaju neki uslov
-- primer:
-- iz tabele customers, procitati sve klijente:
-- koji dolaze iz Srbije
-- koji imaju platu jednaku (manju, vecu) od 500

SELECT *
FROM `customers`
WHERE `state` = "Srbija"; -- izbaci  sve redove kojima je state srbija 

SELECT *
FROM `customers`
WHERE `state` = "Rumunija"; -- nema nista sa rumunijom pa ne zbaci nista

-- bitno je da se sve unosi onako kako je u tabeli tj bazi

SELECT *
FROM `customers`
WHERE `salary` = 500; 

SELECT *
FROM `customers`
WHERE `salary` >= 500; 


SELECT *
FROM `customers`
WHERE `salary` > 500;  -- strogo vece od 500 znaci 500 se ne ubraja


-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji je status aktivan (1),
-- Čiji je prioritet nizak (0)

SELECT `task_id`, `title`, `description`FROM `tasks` WHERE `status` = 1;
SELECT `task_id`, `title`, `description`FROM `tasks` WHERE `priority` = 0;

-- iz tabele tasks, procitati sve zadatke koji su prioritetni a koji su zavrseni

SELECT `task_id`, `title`, `description`
FROM `tasks` 
WHERE `priority` =! 0 -- moze i =!1 ali bolje je sa 0
AND `due_date` IS NOT NULL;

-- Iz tabele customers, pročitati sve klijente:

-- Čija je plata između 300 i 800,
SELECT `name`, `address`, `state`, `salary` FROM `customers` WHERE `salary` BETWEEN 300 AND 800;
-- between ukljucuje i granicne vrednosti !!!!  znaci salary >= 300  salary <=800

-- Čija je plata jednaka 500, 600 ili 700
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `salary` = 500
OR `salary` = 600
OR `salary` = 700;

-- isto je sto i:

SELECT `name`, `address`, `state`, `salary` 
FROM `customers`
WHERE `salary` IN (500, 600, 700);

-- Čije je ime Ana, Bojana ili Vuk
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `name` IN ("Ana", "Bojana", "Vuk");

-- Čije je ime pocinje na slovo B
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `name` LIKE "B%"; -- posle slova B ide nesto bilo sta , to znaci %

-- Čije je ime sadrzi slovo j
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `name` LIKE "%j%";


-- Koji su iz Srbije, Rumunije ili Bugarske,
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `state` IN ("Srbija", "Rumunija", "Bugarska");



-- Koju potiču iz zemlje koja počinje na slovo “S”.
SELECT `name`, `address`, `state`, `salary`
FROM `customers`
WHERE `name` LIKE "S%";


-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji id pripada skupu {1, 4, 8, 12},
SELECT * FROM `tasks`
WHERE `task_id`  IN (1, 4, 8, 12);

-- Čiji je početak veći od 2019-01-01,
SELECT * FROM `tasks`
WHERE `start_date` >= "2019-01-01";

-- Čiji je status različit od neaktivan.
SELECT * FROM `tasks`
WHERE `status` != 0;

INSERT INTO `tasks` 
VALUES
(4, "Setnja psa", "2023-06-02", "2023-06-02", 0, "Kratka setnja psa", 1),
(5, "Rucak", "2023-06-02", "2023-06-02", 0,"Spremanje rucka", 1),
(6, "Knjiga", "2023-06-02", "2023-06-02", 0,"Citanje knjige", 0);

-- Limitiranje broja rezultata
-- Ukoliko je rezultat čitanja veliki, može se ograničiti upotrebom LIMIT klauzule:
SELECT column_name(s)
FROM table_name
WHERE condition
LIMIT number;
-- prvih odredjeni broj rezultata
SELECT * FROM `customers` LIMIT 2;

SELECT * FROM `customers` WHERE `name` LIKE "B%" LIMIT 1;

-- prikazati prva dva korisnika koji imaju dvocifren broj poseta
SELECT * FROM `customers` WHERE `number_of_visits` BETWEEN 10 and 99 LIMIT 2;

-- sortiranje podataka
-- Za sortiranje rezultata čitanja koristi se  ORDER BY klauzula
SELECT *
FROM `customers` 
ORDER BY `name`;
-- podrazumevano je rastuci  ASC redosled ako zelimo opadajuce DESC

-- svi korisnici po godinama od najstarijih ka najmladjim
SELECT *
FROM `customers` 
ORDER BY `age` DESC;

-- svi korisnici po godinama od najmladjih ka najstarijima i po broju poseta od vise ka manjem broju poseta 
-- drugi uslov se primenjuje ako imamo vise korisnika sa istim brojem godina!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
SELECT *
FROM `customers` 
ORDER BY `age` ASC, `number_of_visits` DESC;

-- prikazi prva dva korisnika sa najvecim brojem poseta, a ciji je broj poseta dvocifren
-- (odredi korisnike sa dvocifrenim brojem poseta i prikazi prva dva sa najvecim takvim brojem poseta)
SELECT *
FROM `customers` 
WHERE `number_of_visits` BETWEEN 10 AND 99
ORDER BY `number_of_visits` DESC 
LIMIT 2;

-- prikazi korisnika koji ima najmanju platu koja je u opsegu izmedju 300 i 500
-- ako ima vise ovakvih korisnika prikazati onog cije je ime prvo u leksikografskom poretku
SELECT *
FROM `customers`
WHERE `salary` BETWEEN 300 AND 500
ORDER BY `salary`, `name` DESC
LIMIT 1;

-- Iz tabele customers, pročitati sve klijente:
-- Koji su iz Srbije a plata je 600,
SELECT * 
FROM `customers`
WHERE `state` = "Srbija" AND `salary` = 600;

-- Čije ime počinje na S ili imaju manje od 30god.
SELECT * 
FROM `customers`
WHERE `name` LIKE "S%" OR `age` < 30;

-- Iz tabele tasks, pročitati sve zadatke:
-- Čiji je status različit od aktivan i prioritet visok,
SELECT * 
FROM `tasks`
WHERE `status` != 1 AND `priority` > 0; 

-- Čiji datum nije veći od 2019-01-01.
SELECT * 
FROM `tasks`
WHERE NOT `start_date` > "2019-01-01" AND NOT `due_date`> "2019-01-01";

SELECT * 
FROM `tasks`
WHERE `start_date` <= "2019-01-01" AND NOT `due_date` <= "2019-01-01";

SELECT COUNT(`age`)
FROM `customers` 
WHERE `age` BETWEEN 30 AND 40;


-- isto to samo sa preimenovanjem polja
SELECT COUNT(`age`) AS "broj_kupaca"
FROM `customers` 
WHERE `age` BETWEEN 30 AND 40;

-- oderediti prosecan broj poseta kupaca
SELECT AVG(`number_of_visits`) AS "prosecan_broj_poseta"
FROM `customers`;

-- odrediti prosecnu platu kupaca iz Srbije
SELECT AVG(`salary`) AS "prosecna_plata_srbije"
FROM `customers`
WHERE `state` = "Srbija";

-- odrediti broj razlicitih imena kupaca
SELECT COUNT(DISTINCT `name`) AS "broj_razlicitih_imena" -- mora DISTINCT pre name a ne pre count jer ako stavimo pre count trazice razlicite od broja svih imena tj od broja 6 i vratice 6
FROM `customers`;

-- odrediti razliciti broj drzava kupaca
SELECT COUNT(DISTINCT `state`) AS "broj_razlicitih_drzava"
FROM `customers`;

-- odrediti ime osobe koja ima najmanju platu 
-- ako je vise takvih, ispisati bilo koju takvu osoba
SELECT `name`
FROM `customers`
WHERE `salary` = (SELECT MIN(`salary`)
FROM `customers`)
LIMIT 1;

-- jos lakse resenje
SELECT `name`
FROM `customers`
WHERE `salary` 
LIMIT 1;

-- ispisati imena svih natprosecno starih osoba u leksikografskom poretku
SELECT `name`
FROM `customers`
WHERE `age` > (SELECT AVG(`age`) FROM `customers`)
ORDER BY `name`;

-- ispisati imena svih osoba iz Srbije sa natprosecnom platom
SELECT `name`
FROM `customers`
WHERE `salary` > (SELECT AVG(`salary`) FROM `customers` WHERE `state` = "Srbija") 
AND `state` = "Srbija";

















