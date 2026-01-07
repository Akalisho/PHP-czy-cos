<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dane_do_zapisu = "Przykładowa treść";
    $plik = fopen("nazwa_pliku.txt", "a+");//uchwyt pliku, otwarcie do dopisania

    flock($plik, 2); //blokada pliku do zapisu

    fwrite($plik, "$dane_do_zapisu\n"); // zapisanie danych do pliku

    rewind($plik);

    $zawartosc = fread($plik, filesize("nazwa_pliku.txt"));

    flock($plik, 3); //odblokowanie pliku

    fclose($plik); //zamknięcie pliku

    echo nl2br($zawartosc); //zmieniamy \n na <br>
    ?>
</body>
</html>