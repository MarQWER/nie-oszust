<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Festiwal Warzyw - Zgłoszenie</title>
</head>
<body>

<h1>Formularz zgłoszeniowy - Festiwal Warzyw</h1>

<form method="POST" action="#">
    <label for="imie">Imię i Nazwisko:</label><br>
    <input type="text" id="imie" name="imie"><br><br>

    <label for="warzywo">Nazwa warzywa:</label><br>
    <input type="text" id="warzywo" name="warzywo"><br><br>

    <label for="waga">Waga warzywa (kg):</label><br>
    <input type="number" id="waga" name="waga" step="0.01" min="0"><br><br>

    <button type="submit" name="klik">Submit</button>
</form>

    <?php
    if (isset($_POST['klik'])) {
        $nazwisko = $_POST['imie'];
        $warzywo = $_POST['warzywo'];
        $waga = $_POST['waga'];

        $con = mysqli_connect('localhost','root','','plants');
        $zpt = "INSERT INTO plants VALUES (0,'$nazwisko', '$warzywo', '$waga', NOW())";

        $send = mysqli_query($con,$zpt);

        if($send) echo "Dziękujemy za zgłoszenie!";
    }
    ?>


</body>
</html>