<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 3</title>
</head>
<body>
<form method="post">
    <input type="number" name="liczba" placeholder="Podaj liczbę">
    <input type="hidden" name="dane" value="<?php 
        if (isset($_POST['dane'])) echo $_POST['dane'] . ',' . $_POST['liczba'];
        ?>">
    <input type="submit" value="Wyślij">
</form>

<?php
if (!empty($_POST['liczba'])) {

    $dane = explode(",", $_POST['dane']);

    $ostatnia = $_POST['liczba'];

    if ($ostatnia == 0) {

        $suma = 0;
        $ile = 0;

        for ($i = 0; $i < count($dane); $i++) {
            if ($dane[$i] != 0 && $dane[$i] != "") {
                $suma += $dane[$i];
                $ile++;
            }
        }

        echo "<p>Suma: $suma</p>";
        echo "<p>Ilość liczb: $ile</p>";
    }
}
?>
</body>
</html>

</body>
</html>