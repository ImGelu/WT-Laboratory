SELECT id, nume FROM proprietari WHERE email IS NULL LIMIT 1;

UPDATE proprietari SET email = "email@example.com" WHERE id = 1;