INSERT INTO judete(nume) 
VALUES ('Cluj'), 
       ('Maramures'), 
       ('Salaj'), 
       ('Alba');

INSERT INTO proprietari(nume) 
VALUES ('Batea Valeria'), 
       ('Chindris Dumitru'), 
       ('Man Gheorghe'), 
       ('Korosi Elisabeta'), 
       ('Nicodim Pasca'), 
       ('Ana Flueras');

SELECT * FROM judete;

SELECT * FROM proprietari;

INSERT INTO pensiuni(nume, judet_id, proprietar_id, nr_locuri)
VALUES ('Batea', 4, 1, 6),
	('Chindris', 2, 2, 2),
       ('Man', 2, 3, 6),
       ('Magnolia', 3, 4, 8),
       ('Scarisoara', 1, 5, 10),
       ('Ana', 1, 6, 10);

INSERT INTO imagini(mime_type, cale, data, pensiune_id)
VALUES ("image/png", "001.png", CURRENT_TIMESTAMP, 1),
       ("image/png", "002.png", CURRENT_TIMESTAMP, 2),
       ("image/png", "003.png", CURRENT_TIMESTAMP, 3),
       ("image/png", "004.png", CURRENT_TIMESTAMP, 4),
       ("image/png", "005.png", CURRENT_TIMESTAMP, 5),
       ("image/png", "006.png", CURRENT_TIMESTAMP, 6);