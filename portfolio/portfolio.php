<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Wyświetl - Portfolio</title>
</head>
<body>
    <p>
        <?php
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $dataUrodzenia = $_POST['dataurodzenia'];
            $numerTelefonu = $_POST['numertelefonu'];
            $email = $_POST['email'];
            echo "Portfolio programisty:" . "<br />";
            echo "Imię: $imie" . "<br />";
            echo "Nazwisko: $nazwisko" . "<br />";
            echo "Data Urodzenia: $dataUrodzenia" . "<br />";
            echo "Email: $email" . "<br />";
            echo "Linki:" . "<br />";
            echo "Github - https://github.com/Akalisho" . "<br />";
            echo "LinkedIn - " . "<br />";
            echo "Behance - " . "<br />";
            echo "Beata: 'Najlepszy programista!, jego projekty są bezbłędne i spełniają oczekiwania klienta.'" . "<br />";
            echo "Najlepsze moje projekty: " . "<br />";
        ?>
    </p>
</body>
</html>