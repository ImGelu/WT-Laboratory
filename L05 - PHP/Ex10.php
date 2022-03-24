<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exericțiul 10</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "personal");

    $query = 'SELECT * FROM date_personale WHERE cnp LIKE "1%" OR cnp LIKE "3%" OR cnp LIKE "5%" OR cnp LIKE "7%"';
    $results = mysqli_query($conn, $query);

    echo "Sunt <strong>" . mysqli_num_rows($results) . "</strong> bărbați născuți după 1970:<br/><br/>";

    while ($res = mysqli_fetch_array($results)) {
        echo $res['nume'] . " " . $res['prenume'] . "<br/>";
    }
    ?>
</body>

</html>