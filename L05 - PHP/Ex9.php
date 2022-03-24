<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercițiul 9</title>
</head>

<body>
    <form method="POST">
        <input type="text" placeholder="Nume" name="nume" />
        <input type="text" placeholder="Prenume" name="prenume" />
        <input type="text" placeholder="Nume tată" name="tata" />
        <input type="text" placeholder="Nume mamă" name="mama" />
        <input type="text" placeholder="CNP" name="cnp" />
        <input type="text" placeholder="Serie buletin" name="serie_buletin" />
        <input type="text" placeholder="Numar buletin" name="nr_buletin" />
        <input type="date" placeholder="Data nasterii" name="data_nasterii" />
        <input type="text" placeholder="Adresa" name="adresa" />
        <select name="casatorit">
            <option value="-1" disabled>Stare civilă</option>
            <option value="0">Necăsătorit(ă)</option>
            <option value="1">Căsătorit(ă)</option>
        </select>
        <select name="copii">
            <option value="-1" disabled>Are copii?</option>
            <option value="0">Nu</option>
            <option value="1">Da</option>
        </select>

        <div><input type="submit" value="Adaugă" /></div>
    </form>

    <?php

    if (isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['tata']) && isset($_POST['mama']) && isset($_POST['cnp']) && isset($_POST['serie_buletin']) && isset($_POST['nr_buletin']) && isset($_POST['data_nasterii']) && isset($_POST['adresa']) && isset($_POST['casatorit']) && isset($_POST['copii'])) {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "personal");

        $nume = mysqli_real_escape_string($conn, $_POST['nume']);
        $prenume = mysqli_real_escape_string($conn, $_POST['prenume']);
        $tata = mysqli_real_escape_string($conn, $_POST['tata']);
        $mama = mysqli_real_escape_string($conn, $_POST['mama']);
        $cnp = mysqli_real_escape_string($conn, $_POST['cnp']);
        $serie_buletin = mysqli_real_escape_string($conn, $_POST['serie_buletin']);
        $nr_buletin = mysqli_real_escape_string($conn, $_POST['nr_buletin']);
        $data_nasterii = mysqli_real_escape_string($conn, $_POST['data_nasterii']);
        $adresa = mysqli_real_escape_string($conn, $_POST['adresa']);
        $casatorit = mysqli_real_escape_string($conn, $_POST['casatorit']);
        $copii = mysqli_real_escape_string($conn, $_POST['copii']);

        $query = 'INSERT INTO date_personale(nume, prenume, tata, mama, cnp, serie_buletin, nr_buletin, data_nasterii, adresa, casatorit, are_copii) VALUES("' . $nume . '", "' . $prenume . '", "' . $tata . '", "' . $mama . '", "' . $cnp . '", "' . $serie_buletin . '", "' . $nr_buletin . '", "' . $data_nasterii . '", "' . $adresa . '", "' . $casatorit . '", "' . $copii . '");';
        if (mysqli_query($conn, $query)) {
            echo "Datele au fost adăugate cu succes";
        } else {
            echo "EROARE: $query. " . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>