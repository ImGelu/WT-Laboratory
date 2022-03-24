<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercițiul 5</title>
</head>

<body>
    <form method="POST">
        <div>Cuvânt</div>
        <input type="text" name="cuvant" />

        <input type="submit" value="Trimite cuvântul" />
    </form>

    <?php if (isset($_POST['cuvant'])) {
        $cuvant = trim($_POST['cuvant']);

        if ($cuvant === "") {
            echo "Cuvânt vid. Introduceți un alt șir de caractere.";
        } else {
            echo $cuvant;
        }
    } ?>
</body>

</html>