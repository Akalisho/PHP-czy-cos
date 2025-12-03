<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 5</title>
</head>
<body>

<form method="post">
    <input type="number" name="liczba" placeholder="Podaj liczbę">
    <input type="submit" value="Konwertuj">
</form>

<?php

if (!empty($_POST['liczba'])) {

    $n = $_POST['liczba'];
    $bin = "";

    for ($i = $n; $i > 0; $i = intdiv($i, 2)) {
        $bin .= ($i % 2);
    }

    echo "<p>Wynik binarny: " . strrev($bin) . "</p>";
}

?>
</body>
</html>

