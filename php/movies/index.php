<?php
       
$conn = new mysqli("localhost", "root", "", "movies");

$filmy = [];
if (isset($_GET['szukaj'])) {
    $tytul = $conn->real_escape_string($_GET['tytul']);
    $sql = "SELECT * FROM filmy WHERE tytul LIKE '%$tytul%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $filmy[] = $row;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wyszukiwarka filmów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <h1>Wyszukiwarka filmów</h1>
        <form method="get">
            <input type="text" name="tytul" placeholder="Wpisz tytuł filmu" required>
            <input type="submit" name="szukaj" value="Szukaj">
        </form>

        <?php if(!empty($filmy)): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tytuł</th>
                    <th>Rok</th>
                    <th>Gatunek</th>
                </tr>
                <?php foreach($filmy as $film): ?>
                    <tr>
                        <td><?= htmlspecialchars($film['id']) ?></td>
                        <td><?= htmlspecialchars($film['tytul']) ?></td>
                        <td><?= htmlspecialchars($film['rok']) ?></td>
                        <td><?= htmlspecialchars($film['gatunek']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php elseif(isset($_GET['szukaj'])): ?>
            <p>Nie znaleziono filmów pasujących do tytułu "<strong><?= htmlspecialchars($_GET['tytul']) ?></strong>".</p>
        <?php endif; ?>
    </div>
</body>
</html>