<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Powrót</a>
    <form action="" method="POST">
        <label><input type="text" name="nazwaMema" placeholder="Nazwa mema"></label>
        <label><input type="text" name="autor" placeholder="Autor"></label>
        <label><input type="number" name="like" placeholder="Like"></label>
        <label><input type="number" name="dislike" placeholder="Dislike"></label>
        <label><input type="text" name="picture" placeholder="URL obrazka"></label>
        <input type="submit" name="klik" value="Dodaj Mema">
    </form>

    <?php 

        if(isset($_POST['klik'])) {
            $con = mysqli_connect("localhost", "root", "", "baza");
            $nazwaMema = $_POST["nazwaMema"];
            $autor = $_POST["autor"];
            $like = $_POST["like"];
            $dislike = $_POST["dislike"];
            $picture = $_POST["picture"];

            $zpt = "INSERT INTO memy VALUES (0, '$nazwaMema', '$autor', '$like', '$dislike', '$picture')";

            $send = mysqli_query($con,$zpt);
        }
    
    ?>

</body>
</html>