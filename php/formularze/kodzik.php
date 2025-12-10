<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Podsumowanie zamówienia</h1>";
        echo "Cena: ";
        $cena = 1500;
        if(isset($_POST['pasek']))
        {
            $cena = $cena + 150;
        }
        if(isset($_POST['torebka']))
        {
            $cena = $cena + 500;
        }
        if(isset($_POST['buty']))
        {
            $cena = $cena + 300;
        }
        if(isset($_POST['kapelusz']))
        {
            $cena = $cena + 250;
        }

        echo $cena . "<br> <br>";

        echo "Dostawa na adres: <br>";
    
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $miasto = $_POST['miasto'];
        $ulica = $_POST['ulica'];
        $nrdomu = $_POST['nrdomu'];
        $nrlokalu = $_POST['nrlokalu'];

        echo "<p>".$imie . " " . $nazwisko . "</p>";
        echo $miasto . ", ulica: " . $ulica . " ". $nrdomu . "/" . $nrlokalu;

        echo "<p>Czy faktura: ";
        if(isset($_POST['faktura']))
        {
            echo "TAK";
        }
        else {
            echo "NIE";
        }
        echo "</p>"
    ?>
</body>
</html>