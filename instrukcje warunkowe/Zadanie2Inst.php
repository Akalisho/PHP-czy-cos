<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2</title>
</head>
<body>

<form method="post">
    <input type="text" name="dzien" placeholder="Podaj dzień tygodnia">
    <input type="submit" value="Pokaż danie dnia">
</form>

<?php

if (!empty($_POST['dzien'])) {

    $dzien = strtolower($_POST['dzien']);

    switch ($dzien) {

        case "poniedziałek":
        case "poniedzialek":
            echo "Poniedziałek – Zupa pomidorowa";
            break;

        case "wtorek":
            echo "Wtorek – Kotlet schabowy";
            break;

        case "środa":
        case "sroda":
            echo "Środa – Spaghetti bolognese";
            break;

        case "czwartek":
            echo "Czwartek – Rosół";
            break;

        case "piątek":
        case "piatek":
            echo "Piątek – Ryba z frytkami";
            break;

        case "sobota":
            echo "Sobota – Pizza";
            break;

        case "niedziela":
            echo "Niedziela – Kurczak pieczony";
            break;

        default:
            echo "Nie ma takiego dnia!";
            break;
    }
}

?>

</body>
</html>
