<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index7.php">
        <div>
            <input type="text" name="imie" placeholder="Podaj imie:">
            <input type="submit">
        </div>
    </form>

    <p>
        <?php
            $imie = $_POST['imie'];

            function powitanie($imie = "Gościu") {
                echo "Cześć, $imie!";
            }

            powitanie($imie);
            echo "<br>";
            powitanie();
        ?>
    </p>
</body>
</html>