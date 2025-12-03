<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 4</title>
</head>
<body>

<form method="post">
    <input type="number" name="a" placeholder="Podaj pierwszą liczbę">
    <input type="number" name="b" placeholder="Podaj drugą liczbę">
    <input type="submit" value="Wyświetl">
</form>

<?php

if (!empty($_POST['a']) && !empty($_POST['b'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($a > $b) {
        echo "Pierwsza liczba musi być mniejsza!";
    } else {
        echo "<p>Liczby podzielne przez 3:</p>";

        for ($i = $a; $i <= $b; $i++) {
            if ($i % 3 == 0) {
                echo $i . " ";
            }
        }
    }
}

?>
</body>
</html>
