<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercițiul 11</title>
</head>

<body>
    <form method="POST">
        <input type="text" placeholder="CNP" name="cnp" />
        <input type="text" placeholder="Salariu net" name="salariu_net" />
        <input type="text" placeholder="Salariu brut" name="salariu_brut" />
        <input type="text" placeholder="Cuantumul impozitului" name="impozit" />
        <input type="text" placeholder="Data ultimei majorări" name="data_majorare" />
        <input type="text" placeholder="Motivul ultimei majorări" name="motiv_majorare" />
        <input type="date" placeholder="Data începerii" name="data_incepere" />
        <input type="date" placeholder="Data încheierii" name="data_incheiere" />
        <div><input type="submit" value="Adaugă" /></div>
    </form>

    <?php

    if (isset($_POST['cnp']) && isset($_POST['salariu_net']) && isset($_POST['salariu_brut']) && isset($_POST['impozit']) && isset($_POST['data_majorare']) && isset($_POST['motiv_majorare']) && isset($_POST['data_incepere']) && isset($_POST['data_incheiere'])) {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "personal");

        $cnp = mysqli_real_escape_string($conn, $_POST['cnp']);
        $salariu_net = mysqli_real_escape_string($conn, $_POST['salariu_net']);
        $salariu_brut = mysqli_real_escape_string($conn, $_POST['salariu_brut']);
        $impozit = mysqli_real_escape_string($conn, $_POST['impozit']);
        $data_majorare = mysqli_real_escape_string($conn, $_POST['data_majorare']);
        $motiv_majorare = mysqli_real_escape_string($conn, $_POST['motiv_majorare']);
        $data_incepere = mysqli_real_escape_string($conn, $_POST['data_incepere']);
        $data_incheiere = mysqli_real_escape_string($conn, $_POST['data_incheiere']);

        $query = 'INSERT INTO salarii(cnp, salariu_net, salariu_brut, impozit, data_majorare, motiv_majorare, data_incepere, data_incheiere) VALUES("' . $cnp . '", "' . $salariu_net . '", "' . $salariu_brut . '", "' . $impozit . '", "' . $data_majorare . '", "' . $motiv_majorare . '", "' . $data_incepere . '", "' . $data_incheiere . '");';
        if (mysqli_query($conn, $query)) {
            echo "Datele au fost adăugate cu succes";
        } else {
            echo "EROARE: $query. " . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>