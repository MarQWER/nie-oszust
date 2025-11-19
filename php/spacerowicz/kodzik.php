<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $kierunek = $_POST['kierunek'];
        $wktora = "nieprawidłowe dane";


        $silabohater = 20;
        $silapotwor = 15;
        $potwor = false;

        echo "Postać ruszyła się w: ";
        if($kierunek == "UP") {$wktora = "górę"; $potwor = true;}
        if($kierunek == "DOWN") $wktora = "dół";
        if($kierunek == "LEFT") $wktora = "lewo";
        if($kierunek == "RIGHT") $wktora = "prawo";
        echo $wktora;

        if($potwor)
        {
            echo "<h1>Napotkałeś potwora</h1>";
            echo "<p>Statystyki bohatera: ", $silabohater, "</p>";
            echo "<p>Statystyki potwora: ", $silapotwor, "</p>";
            if($silabohater > $silapotwor) 
            {
                echo "<p>Pokonales potwora! Twoje statystyki wzrosły o 5</p>";
                $silabohater = $silabohater + 5;
                echo "<p>Statystyki bohatera: ", $silabohater, "</p>";
            
            }
            else echo "<p>Przegrałeś, spróboj jeszcze raz</p>";
        }

    ?>
</body>
</html>