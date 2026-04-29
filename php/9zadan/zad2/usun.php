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

        $id = $_GET['id'];

        $sql = "DELETE FROM gry WHERE id=$id";

        $result = mysqli_query($conn,$sql);

        header("Location: index.php");
    ?>
</body>
</html>

