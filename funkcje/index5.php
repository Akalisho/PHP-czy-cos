<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index5.php">
        <div>
            <input type="number" name="liczba" placeholder="Podaj liczbe:">
            <input type="submit">
        </div>
    </form>
    
    <p>
        <?php
            $liczba = $_POST['liczba'];
            
            function czyParzysta($liczba) {
                if ($liczba % 2 === 0)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }

            $parzysta = czyParzysta($liczba);
            
            echo "Parzysta = " . $parzysta;
        ?>
    </p>
</body>
</html>