<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercițiul 7</title>
</head>

<body>
    <?php if (isset($_COOKIE['lab_tw_id'])) {
        echo "Acest utilizator are adresa de IP: " . $_COOKIE['lab_tw_id'];
    } else {
        echo "Acest utilizator are adresa de IP: " . $_SERVER['REMOTE_ADDR'] . ". A fost salvat un Cookie pentru identificare ulterioară a acestuia.";
        setcookie("lab_tw_id", $_SERVER['REMOTE_ADDR'], time() + 36000);
    } ?>
</body>

</html>