<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $plik = 'plik.txt';
    $statystyki = 'statystyki.txt';

    if (!file_exists($plik)) {
        file_put_contents($plik, "0");
    }

    $fp = fopen($plik, 'w');

    $liczby = [];
    for($i = 0; $i < 20; $i++) {
        $liczby[] = rand(1, 100);
    }

    fflush($fp);

    if(flock($fp, LOCK_EX)) {
        foreach($liczby as $liczba) {
            fwrite($fp, $liczba . PHP_EOL);
        }
        fflush($fp);
        flock($fp, LOCK_UN);
    }
    fclose($fp);

    $dane = file($plik);

    echo "Wszystkie liczby:<br>";
    foreach ($dane as $l) {
        echo $l . " ";
    }
    echo "<br><br>";

    $sum = array_sum($dane);
    $srednia = round($sum / count($dane),2);
    $min = min($dane);
    $max = max($dane);

    $parzyste = 0;
    $nieparzyste = 0;

    foreach ($dane as $l) {
        ($l % 2 == 0) ? $parzyste++ : $nieparzyste++;
    }

    echo "Suma: $sum<br>";
    echo "Średnia $srednia<br>";
    echo "Min: $min<br>";
    echo "Max: $max<br>";
    echo "Parzyste: $parzyste<br>";
    echo "Nieparzyste: $nieparzyste<br>";

    $data = date("Y-m-d H:i:s");
    $linia = "[$data] Suma: $sum | Srednia: $srednia | Min: $min | Max: $max | Parzyste: $parzyste | Nieparzyste: $nieparzyste";
    file_put_contents("statystyki.txt", $linia);
    ?>
</body>
</html>