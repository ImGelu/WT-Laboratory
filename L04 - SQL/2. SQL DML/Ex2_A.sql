-- 1
SELECT id, nume FROM pensiuni WHERE nr_locuri >= 7;

-- 2
SELECT * FROM proprietari WHERE telefon IS NULL;

-- 3
SELECT pe.nume AS "nume_pensiune", pr.nume AS "nume_proprietar" FROM pensiuni AS pe LEFT JOIN proprietari AS pr ON pe.proprietar_id = pr.id WHERE pe.nr_locuri = 6;

-- 4
SELECT pe.nume, pe.nr_locuri FROM pensiuni AS pe LEFT JOIN judete AS ju ON pe.judet_id = ju.id WHERE ju.nume = "Salaj";

-- 5a
SELECT pe.id, pe.nume, COUNT(im.id) AS "nr_imagini" FROM pensiuni AS pe LEFT JOIN imagini AS im ON pe.id = im.pensiune_id GROUP BY pe.nume;

-- 5b
SELECT pe.id, pe.nume, COUNT(im.id) AS "nr_imagini" FROM pensiuni AS pe LEFT JOIN imagini AS im ON pe.id = im.pensiune_id GROUP BY pe.nume ORDER BY nr_imagini DESC;

-- 5c
SELECT pe.id, pe.nume, COUNT(im.id) AS "nr_imagini" FROM pensiuni AS pe RIGHT JOIN imagini AS im ON pe.id = im.pensiune_id GROUP BY pe.nume ORDER BY nr_imagini DESC;

-- 6
SELECT pr.email FROM pensiuni AS pe LEFT JOIN proprietari AS pr ON pe.proprietar_id = pr.id LEFT JOIN judete AS ju ON pe.judet_id = ju.id WHERE ju.nume = "Alba";