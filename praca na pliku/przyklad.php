<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $plik = 'licznik.txt';

    //jeśli plik nie istnieje, utwórz go z zerem
    if (!file_exists($plik)) {
        file_put_contents($plik, "0");
    }

    $fp = fopen($plik, 'r+');   //tryb: odczyt + zapis
    flock($fp, LOCK_EX);        //blokada wyłączna

    $liczba = (int)fread($fp, filesize($plik));     //odczytaj aktualną wartość
    $liczba++;                                      // zwiększ licznik

    rewind($fp);            //cofnij wskaźnik na początek pliku
    fwrite($fp, $liczba);   //zapisz nową wartość
    fflush($fp);            //zapisz bufor na dysk
    flock($fp, LOCK_UN);    //zwolnij blokadę
    fclose($fp);

    echo "Liczba odwiedzin: $liczba";
    ?>
</body>
</html>