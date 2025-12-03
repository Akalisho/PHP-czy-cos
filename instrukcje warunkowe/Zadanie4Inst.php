<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
    <?php
    $wynik = 72;

    switch (true) {
        case $wynik >= 90:
            $ocena = "A";
            break;
        case $wynik >= 80:
            $ocena = "B";
            break;
        case $wynik >= 70:
            $ocena = "C";
            break;
        case $wynik >= 60:
            $ocena = "D";
            break;
        default:
            $ocena = "F";
    }

    echo "Wynik: $wynik, Ocena: $ocena";
    ?>
</body>
</html>