<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Pracownicy</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="blob blob1"></div>
<div class="blob blob2"></div>
<div class="blob blob3"></div>

<h1>Lista pracowników</h1>

<table>
<tr>
<th>ID</th>
<th>Imię</th>
<th>Nazwisko</th>
<th>Stanowisko</th>
</tr>

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

?>

</table>

<a class="btn" href="dodaj.php">Dodaj pracownika</a>

</body>
</html>