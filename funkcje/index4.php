<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index4.php">
        <div>
            <input type="number" name="a" placeholder="bok a">
            <input type="number" name="b" placeholder="bok b">
            <input type="number" name="h" placeholder="wysokosc trapezu">
            <input type="submit">
        </div>
    </form>
    
    <p>
        <?php
            $a = $_POST['a'];
            $b = $_POST['b'];
            $h = $_POST['h'];

            function bokTrapezu($a, $b, $h) {
                return ($a + $b) * $h / 2;
            }

            $pole = bokTrapezu($a, $b, $h);
            echo "Pole = " . $pole;
        ?>
    </p>
</body>
</html>