<?php 

        $rodzaj = $_POST['rodzaj'];
        $rozmiar = $_POST['rozmiar'];

        $cena = 20;

        if(isset($_POST['ser']))$cena += 2;
        if(isset($_POST['frytki']))$cena += 7;
        if(isset($_POST['jalapeno']))$cena += 4;

        echo "<h1>Zamowienie przyjęte!</h1>";
        echo "<p>Cena zamówienia wynosi: $cena zł</p>";

?>