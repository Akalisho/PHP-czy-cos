<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 6</title>
</head>
<body>

<form method="post">
    <input type="number" name="wys" placeholder="Podaj wysokość">
    <input type="submit" value="Generuj">
</form>

<?php

if (!empty($_POST['wys'])) {

    $wys = $_POST['wys'];

    for ($i = $wys; $i > 0; $i--) {

        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }

        echo "<br>";
    }
}

?>
</body>
</html>
