<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Anime</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Dodaj Anime</h2>
        <form action="add.php" method="POST">
            <input type="text" name="tytul" placeholder="Tytuł Anime" required>
            <input type="number" name="ocena" placeholder="Ocena 1-10" min="1" max="10" required>
            <button type="submit">Dodaj Anime</button>
        </form>
    </div>
    

    <div class="games">

    <?php

        $conn = new mysqli("localhost", "root", "", "4fa_zadanka");

        $sql = "SELECT * FROM anime ORDER BY ocena DESC";
        $result = mysqli_query($conn,$sql);

        while($row = $result->fetch_assoc()) {

        $ocena = $row['ocena'];

        if($ocena >= 8) $class = "high";
        elseif($ocena >= 5) $class = "medium";
        else $class = "low";

        echo "
        <div class='game-card'>
            <div class='game-info'>
                <h3>" . htmlspecialchars($row['tytul']) . "</h3>
                <span class='rating $class'>$ocena</span>
            </div>

            <a class='delete-btn' 
            href='usun.php?id=".$row['id']."' 
            onclick=\"return confirm('Na pewno usunąć?')\">
            Usuń
            </a>
        </div>
        ";
        }
    ?>

    </div>

    

    
</div>



</table>
</body>
</html>