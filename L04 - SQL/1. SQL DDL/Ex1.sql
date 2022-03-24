CREATE DATABASE pensiuni;
USE pensiuni;

CREATE TABLE pensiuni(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nume VARCHAR(500) NOT NULL,
    descriere VARCHAR(1000),
    judet_id tinyint NOT NULL,
    proprietar_id smallint NOT NULL,
    nr_locuri tinyint NOT NULL
);

CREATE TABLE judete(
    id tinyint AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nume VARCHAR(50) NOT NULL
);

CREATE TABLE proprietari(
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nume VARCHAR(100) NOT NULL,
    adresa varchar(500),
    telefon varchar(20),
    email varchar(50)
);

CREATE TABLE imagini(
    id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nume VARCHAR(500),
    descriere varchar(1000),
    mime_type varchar(100) NOT NULL,
    cale varchar(500) NOT NULL,
    data datetime NOT NULL,
    pensiune_id int NOT NULL
);