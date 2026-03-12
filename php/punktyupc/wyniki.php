<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Wyniki wyszukiwania</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>Wyniki wyszukiwania</h1>
</header>

<a href="index.php" class="back-button">Powrót do wyszukiwarki</a>

<section class="search-box">

<?php

$conn = mysqli_connect("localhost","root","","upc_punkty");

$city = $_POST["city"];

$zpt = "SELECT * FROM punkty_upc WHERE miasto LIKE '%$city%'";
$wynik = mysqli_query($conn,$zpt);

if(mysqli_num_rows($wynik) > 0){

echo "<h2>Najbliższe punkty UPC</h2>";

echo "<table>";
echo "<tr>
<th>Adres</th>
<th>Miasto</th>
</tr>";

while($row = mysqli_fetch_assoc($wynik)){

echo "<tr>";
echo "<td>".$row['adres']."</td>";
echo "<td>".$row['miasto']."</td>";
echo "</tr>";

}

echo "</table>";

}else{

echo "<h2>Brak punktów w tym mieście</h2>";
echo "<p>Dodaj nowy punkt UPC:</p>";

echo '
<form method="POST" action="dodaj.php">

<input type="text" name="adres" placeholder="Adres" required>

<input type="text" name="miasto" value="'.$city.'" required>

<button type="submit">Dodaj punkt</button>

</form>
';

}

?>

</section>

</body>
</html>