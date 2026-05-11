<?php
    $conn = mysqli_connect("localhost", "root", "", "korona");
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Korona gór polskich</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <header>
            <div id="header1">
                <img src="logo.png" alt="Logo">
            </div>

            <div id="header2">
                <h1>Korona Gór Polskich</h1>
            </div>
        </header>

        <main>
            <?php
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT szczyty.plik, szczyty.nazwa, szczyty.wysokosc, szczyty.pasmo, opis.opis FROM szczyty JOIN opis ON szczyty.id = opis.szczyty_id WHERE szczyty.id = $id;";
                    $result = mysqli_query($conn, $query);
                    $row = $result -> fetch_assoc();
                    echo "<img src='{$row['plik']}' alt='{$row['nazwa']}' class='duze'>";
                    echo "<h2>{$row['nazwa']}</h2>";
                    echo "<h3>Wysokość: {$row['wysokosc']} m n.p.m.</h3>";
                    echo "<h3>Pasmo górskie: {$row['pasmo']}</h3>";
                    echo "<p>{$row['opis']}</p>";
                }
            ?>
        </main>

        <section>
            <?php
                $query = "SELECT nazwa, plik FROM szczyty LIMIT 10;";
                $result = mysqli_query($conn, $query);
                while($row = $result -> fetch_assoc()) {
                    echo "<img src='{$row['plik']}' alt='{$row['nazwa']}' class='miniatury'>";
                }
            ?>
        </section>

        <div id="footer1">
            <h3>Kontakt</h3>
            <ul>
                <li>Zadzwoń do nas: 111 222 333</li>
                <li><a href="mailto:korona@gory.pl">Napisz do nas</a></li>
            </ul>
        </div>

        <div id="footer2">
            <h3>&copy; Wykonane przez: 00000000000</a></h3>
        </div>
    </body>
</html>

<?php
    $conn -> close();
?>