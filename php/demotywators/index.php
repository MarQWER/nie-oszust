<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylenowy.css">
    <link rel="stylesheet" href="stylewspolny.css">
</head>
<body>
    <div class="blob blob1"></div>
    <div class="blob blob2"></div>
    <div class="blob blob3"></div>
    <div class="blob blob4"></div>
    <?php
    $con = mysqli_connect("localhost", "root", "", "baza");
    $zpt = "SELECT * FROM memy";
    $send = mysqli_query($con, $zpt);
    echo "<div id='kon'>";
   while ($row = mysqli_fetch_assoc($send)) {
    echo "<div>";
    echo "<h3>{$row['nazwaMema']}</h3>";
    echo '<img width="300px" height="300px" src="' . $row['picture'] . '" alt="meme">';
    echo '<h3>' . $row['like'] . " like" . '</h3>';
    echo '<h3>' . $row['autor'] . '</h3>';
    echo '<button id="like">like</button>'; echo '<button id="dislike">dislike</button>';
    echo "</div>";
}
    echo "</div>";
    ?>
    <br> <br> <br>
    <a id="dodaj" href="dodajmem.php">Dodaj swojego mema</a>
</body>
</html>