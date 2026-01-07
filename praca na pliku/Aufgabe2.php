<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $plik = 'liczby.txt';

    $liczby = [];
    for($i = 0; $i < 6; $i++) {
        $liczby[] = rand(1, 49);
    }
    
    $data = date("Y-m-d H:i:s");

    $linia = $data . " wylosowano liczby: " . implode(", ", $liczby) . PHP_EOL;
    file_put_contents('liczby.txt', $linia);

    echo nl2br(file_get_contents($plik));
    ?>
</body>
</html>