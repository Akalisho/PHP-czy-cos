<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <?php
    $kategoria = "Clothing";
    $cena = 250;

    if ($kategoria == "Electronics") {
        $rabat = 10;
    } elseif ($kategoria == "Clothing") {
        $rabat = 20;
    } elseif ($kategoria == "Books") {
        $rabat = 5;
    } else {
        $rabat = 0;
    }

    $nowa_cena = $cena - ($cena * $rabat / 100);

    echo "Kategoria: $kategoria<br>";
    echo "Cena przed rabatem: $cena zł<br>";
    echo "Rabat: $rabat%<br>";
    echo "Cena po rabacie: " . number_format($nowa_cena, 2) . " zł";
    ?>  
</body>
</html>