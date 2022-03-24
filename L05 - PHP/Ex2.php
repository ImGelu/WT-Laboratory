<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercițiul 2</title>
</head>

<body>
    <form method="POST">
        <div>Primul numar</div>
        <input type="number" name="a" />

        <div>Al doilea numar</div>
        <input type="number" name="b" />

        <input type="submit" name="op" value="+" />
        <input type="submit" name="op" value="-" />
        <input type="submit" name="op" value="*" />
        <input type="submit" name="op" value="/" />
    </form>

    <?php if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['op'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $op = $_POST['op'];

        if (!is_numeric($a) || !is_numeric($b)) {
            echo "Sunt permise doar numere!";
        } else {
            if ($op == '+') echo $a + $b;
            else if ($op == '-') echo $a - $b;
            else if ($op == '*') echo $a * $b;
            else if ($op == '/') {
                if ($b != 0) {
                    echo $a / $b;
                } else {
                    echo "Împărțire la 0!";
                }
            }
        }
    } ?>
</body>

</html>