<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
</head>
<body>

<h2>Najlepszy sklep internetowy w Polsce</h2>

<p>Zapisz się na nasz rewelacyjny newsletter:</p>

<form method="POST" action="">

    <label>Imię:</label><br>
    <input type="text" name="imie"><br>

    <label>Nazwisko:</label><br>
    <input type="text" name="nazwisko"><br>

    <label>Adres e-mail:</label><br>
    <input type="email" name="email"><br>

    <label>Czy jesteś już naszym klientem?</label><br>
    <input type="radio" name="klient" value="tak"> Tak
    <input type="radio" name="klient" value="nie" checked> Nie<br>

    <label>Uwagi:</label><br>
    <textarea name="uwagi" rows="4" cols="40"></textarea><br>

    <input type="submit" value="Zapisz się">

</form>

<?php 

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $email = $_POST["email"];
        $klient = $_POST["klient"];
        $uwagi = $_POST["uwagi"];
        
        echo "<p>Dziękujemy za zapisanie się do naszego newslettera! wszystkie wiadomości będą wysyłane na podany email: $email </p>";
    }
    

?>

</body>
</html>