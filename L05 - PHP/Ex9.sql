CREATE DATABASE personal;
USE personal;

CREATE TABLE date_personale(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nume VARCHAR(500) NOT NULL,
    prenume VARCHAR(500) NOT NULL,
    cnp VARCHAR(13) NOT NULL,
    serie_buletin VARCHAR(500) NOT NULL,
    nr_buletin VARCHAR(500) NOT NULL,
    tata VARCHAR(500) NOT NULL,
    mama VARCHAR(500) NOT NULL,
    data_nasterii DATE NOT NULL,
    adresa VARCHAR(500) NOT NULL,
    casatorit BOOLEAN NOT NULL,
    are_copii BOOLEAN NOT NULL
);

INSERT INTO date_personale(nume, prenume, cnp, serie_buletin, nr_buletin, tata, mama, data_nasterii, adresa, casatorit, are_copii) 
VALUES ('Batea', 'Valeria', '2970111359910', 'AB', '123456', 'Georgel', 'Alina', '1999-03-12', 'Arad', 0, 0), 
       ('Chindris', 'Dumitru', '1871120069374', 'CD', '123436', 'Adrian', 'Maria', '1989-05-12', 'Bistrita', 0, 1), 
       ('Man', 'Gheorghe', '5941101045528', 'EF', '193456', 'Alexandru', 'Laura', '1969-06-04', 'Cluj', 1, 1), 
       ('Korosi', 'Elisabeta', '2041126057572', 'GH', '223456', 'Gabriel', 'Geanina', '1992-11-30', 'Iasi', 1, 1), 
       ('Nicodim', 'Pasca', '2910110209813', 'IJ', '156456', 'Alin', 'Ramona', '1978-10-10', 'Constanta', 0, 0), 
       ('Ana', 'Flueras', '6040420312387', 'KL', '823456', 'George', 'Alexandra', '2001-01-02', 'Iasi', 1, 0);

CREATE TABLE salarii(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    cnp VARCHAR(13) NOT NULL,
    salariu_net FLOAT NOT NULL,
    salariu_brut FLOAT NOT NULL,
    impozit FLOAT NOT NULL,
    data_majorare DATE NOT NULL,
    motiv_majorare VARCHAR(500) NOT NULL,
    data_incepere DATE NOT NULL,
    data_incheiere DATE
);

