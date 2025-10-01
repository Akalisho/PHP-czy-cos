<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PHP Get</title>
</head>
<body>
    <p>
        <?php
            $zmienna = $_GET['pole1'];
            echo "Wartość pola pole1 z formularza to: $zmienna";
        ?>
    </p>
</body>
</html>