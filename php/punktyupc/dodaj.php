<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Dodawanie punktu</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>Dodawanie punktu UPC</h1>
</header>

<?php

$conn = mysqli_connect("localhost","root","","upc_punkty");

$adres = $_POST["adres"];
$miasto = $_POST["miasto"];

$sql = "INSERT INTO punkty_upc VALUES (0,'$miasto','$adres')";

if(mysqli_query($conn,$sql)){
    
echo "<div class='success'>✅ Punkt UPC został dodany do bazy danych!</div>";

}else{

echo "<div class='error'>❌ Wystąpił błąd podczas dodawania punktu.</div>";

}

?>

<br>

<a href="index.php" class="back-button">← Powrót do wyszukiwarki</a>

</section>

<footer>
<p>2026 Wyszukiwarka punktów obsługi UPC</p>
</footer>

</body>
</html>