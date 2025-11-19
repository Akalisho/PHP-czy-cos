<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index6.php">
        <div>
            <input type="number" name="ocena" placeholder="Podaj ocene:">
            <input type="submit">
        </div>
    </form>
    
    <p>
        <?php
            $ocena = $_POST['ocena'];

            function ocenaSlowna($ocena) {
                switch ($ocena) {
                    case 1:
                        echo "Niedostateczny";
                        break;
                    case 2:
                        echo "Dopuszczający";
                        break;
                    case 3:
                        echo "Dostateczny";
                        break;
                    case 4:
                        echo "Dobry";
                        break;
                    case 5:
                        echo "Bardzo dobry";
                        break;
                    case 6:
                        echo "Celujący";
                        break;
                    default:
                        echo "Niepoprawna liczba";
                        break;
                }
            }

            $wyswietlOcene = ocenaSlowna($ocena);
            echo $wyswietlOcene;
        ?>
    </p>
</body>
</html>