<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Dodaj pracownika</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="blob blob1"></div>
<div class="blob blob2"></div>
<div class="blob blob3"></div>

<h1>Dodaj pracownika</h1>

<form method="POST">

<input type="text" name="imie" placeholder="Imię" required>
<input type="text" name="nazwisko" placeholder="Nazwisko" required>
<input type="text" name="stanowisko" placeholder="Stanowisko" required>

<input type="submit" name="dodaj" value="Dodaj">

</form>

<table>
<tr>
<th>ID</th>
<th>Imię</th>
<th>Nazwisko</th>
<th>Stanowisko</th>
</tr>

<a class="btn" href="index.php">Powrót</a>

<?php

$con = mysqli_connect("localhost","root","","pracownicy");

$zpt = "SELECT * FROM pracownicy";
$send = mysqli_query($con,$zpt);

while($row = mysqli_fetch_assoc($send)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['imie']."</td>";
    echo "<td>".$row['nazwisko']."</td>";
    echo "<td>".$row['stanowisko']."</td>";
    echo "</tr>";
}

echo "</table>";

if(isset($_POST['dodaj'])){

$con = mysqli_connect("localhost","root","","pracownicy");

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$stanowisko = $_POST['stanowisko'];

$sql = "INSERT INTO pracownicy VALUES (0,'$imie','$nazwisko','$stanowisko')";
mysqli_query($con,$sql);

echo "<p>Dodano pracownika</p>";

}

?>

</body>
</html>