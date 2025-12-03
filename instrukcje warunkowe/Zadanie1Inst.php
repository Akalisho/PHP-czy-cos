<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
</head>
<body>

<form method="post">
    <input type="number" name="pm" placeholder="Wpisz wartość 0-500">
    <input type="submit" value="Sprawdź">
</form>

<?php

if (isset($_POST['pm'])) {

    $pm = $_POST['pm'];

    if ($pm >= 0 && $pm <= 50) {
        echo "Dobra jakość powietrza";
    }
    elseif ($pm >= 51 && $pm <= 100) {
        echo "Umiarkowana jakość powietrza";
    }
    elseif ($pm >= 101 && $pm <= 150) {
        echo "Zła jakość powietrza";
    }
    elseif ($pm >= 151 && $pm <= 200) {
        echo "Bardzo zła jakość powietrza";
    }
    elseif ($pm >= 201 && $pm <= 300) {
        echo "Szkodliwa jakość powietrza";
    }
    elseif ($pm >= 301 && $pm <= 500) {
        echo "Niebezpieczna jakość powietrza";
    }
    else {
        echo "Wartość poza zakresem!";
    }
}

?>

</body>
</html>
