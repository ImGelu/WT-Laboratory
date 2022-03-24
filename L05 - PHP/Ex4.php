<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercițiul 4</title>
</head>

<body>
    <form method="POST">
        <div>Primul șir de numere (despărțite prin virgulă)</div>
        <input type="text" name="sir1" />

        <div>Al doilea șir de numere (despărțite prin virgulă)</div>
        <input type="text" name="sir2" />

        <input type="submit" value="Ordonare șiruri" />
    </form>

    <?php if (isset($_POST['sir1']) && isset($_POST['sir2'])) {
        $sir1 = explode(',', $_POST['sir1']);
        $sir2 = explode(',', $_POST['sir2']);

        $sir = array_merge($sir1, $sir2);

        sort($sir);

        echo "Sirul ordonat este: ";

        foreach ($sir as $nr) {
            echo $nr . " ";
        }
    } ?>
</body>

</html>