INSERT INTO judete(nume) VALUES ("Bistrita-Nasaud");

INSERT INTO proprietari(nume) VALUES ("Alin Morosanu");

INSERT INTO pensiuni(nume, judet_id, proprietar_id, nr_locuri) VALUES ('Morar', 5, 7, 10);

INSERT INTO imagini(mime_type, cale, data, pensiune_id) VALUES ("image/png", "007.png", CURRENT_TIMESTAMP, 7);