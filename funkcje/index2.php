<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <form method="post">
        <div>
            <input type="number" name="a" placeholder="liczba a">
            <input type="number" name="b" placeholder="liczba b">
            <input type="submit">
        </div>
    </form> 
    
    <p>
        <?php
            $a = $_POST['a'];
            $b = $_POST['b'];

            function dodaj($a, $b) {
                return $a + $b;
            }

            $suma = dodaj($a, $b);
            echo "Suma = " . $suma;
        ?>
    </p>
</body>
</html>