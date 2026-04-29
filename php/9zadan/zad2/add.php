<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $conn = new mysqli("localhost", "root", "", "4fa_zadanka");

        $tytul = $_POST['tytul'];
        $ocena = $_POST['ocena'];

        $sql = "INSERT INTO gry (tytul, ocena) VALUES ('$tytul', '$ocena')";

        $result = mysqli_query($conn,$sql);

        header("Location: index.php");
    ?>
</body>
</html>

