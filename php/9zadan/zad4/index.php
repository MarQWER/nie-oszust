<?php
$conn = new mysqli("localhost", "root", "", "4fa_zadanka");

if (isset($_POST['dodaj'])) {
    $tytul = $_POST['tytul'];
    $tresc = $_POST['tresc'];

    $sql = "INSERT INTO ogloszenia (tytul, tresc, data_dodania) 
            VALUES ('$tytul', '$tresc', NOW())";

    $result = mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM ogloszenia ORDER BY data_dodania DESC";
$result = mysqli_query($conn, $sql)
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Szkolna tablica ogłoszeń</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .formularz {
            background: white;
            padding: 20px;
            margin: 20px auto;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .ogloszenie {
            background: white;
            margin: 15px auto;
            padding: 15px;
            width: 500px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        .data {
            font-size: 12px;
            color: gray;
        }
    </style>
</head>
<body>

<h1>📌 Szkolna tablica ogłoszeń</h1>

<div class="formularz">
    <form method="POST">
        <input type="text" name="tytul" placeholder="Tytuł" required>
        <textarea name="tresc" placeholder="Treść ogłoszenia" required></textarea>
        <button type="submit" name="dodaj">Dodaj ogłoszenie</button>
    </form>
</div>

<?php while($row = $result->fetch_assoc()) { ?>
    <div class="ogloszenie">
        <h3><?php echo $row['tytul']; ?></h3>
        <p><?php echo $row['tresc']; ?></p>
        <p class="data">Dodano: <?php echo $row['data_dodania']; ?></p>
    </div>
<?php } ?>

</body>
</html>