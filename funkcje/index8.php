<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index8.php">
        <div>
            <input type="text" name="imie" placeholder="Podaj imie:">
            <input type="submit">
        </div>
    </form>

    <p>
        <?php
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            function max3($a, $b, $c) {
                return max($a, $b, $c); 
            }

            $max = max3($a, $b, $c);
            echo "Największa wartość podanych liczb: " . $max;
        ?>
    </p>
</body>
</html>