<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styledodaj.css">
    <link rel="stylesheet" href="stylewspolny.css">
</head>
<body>
    <div class="blob blob1"></div>
    <div class="blob blob2"></div>
    <div class="blob blob3"></div>
    <div class="blob blob4"></div>
    <a href="index.php">Powrót</a>
    <form action="" method="POST">
        <label><input type="text" name="nazwaMema" placeholder="Nazwa mema" required></label>
        <label><input type="text" name="autor" placeholder="Autor" required></label>
        <label><input type="text" name="picture" placeholder="URL obrazka" required></label>
        <input type="submit" name="klik" value="Dodaj Mema">
    </form>

    <?php 

        if(isset($_POST['klik'])) {
            $con = mysqli_connect("localhost", "root", "", "baza");
            $nazwaMema = $_POST["nazwaMema"];
            $autor = $_POST["autor"];
            $picture = $_POST["picture"];

            $zpt = "INSERT INTO memy VALUES (0, '$nazwaMema', '$autor', '0', '0', '$picture')";

            $send = mysqli_query($con,$zpt);
        }
    
    ?>

</body>
</html>