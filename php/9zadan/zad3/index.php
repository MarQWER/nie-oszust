<?php
$conn = new mysqli("localhost", "root", "", "4fa_zadanka");

if (isset($_POST['dodaj'])) {
    $tytul = $_POST['tytul'];
    $autor = $_POST['autor'];

    $sql = "INSERT INTO ksiazki (tytul, autor, status) 
            VALUES ('$tytul', '$autor', 'do przeczytania')";
    $result = mysqli_query($conn,$sql);
}

if (isset($_GET['przeczytana'])) {
    $id = $_GET['przeczytana'];

    $sql = "UPDATE ksiazki SET status='przeczytana' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
}

$sql = "SELECT * FROM ksiazki";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 70%;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
            text-align: center;
        }

        input {
            padding: 10px;
            margin: 5px;
            width: 30%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        .status-read {
            color: green;
            font-weight: bold;
        }

        .status-not {
            color: red;
            font-weight: bold;
        }

        .btn-read {
            background: #2196F3;
            padding: 5px 10px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-read:hover {
            background: #0b7dda;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>📚 Moja biblioteka</h1>

    <!-- Formularz -->
    <form method="POST">
        <input type="text" name="tytul" placeholder="Tytuł" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <button type="submit" name="dodaj">Dodaj książkę</button>
    </form>

    <!-- Tabela -->
    <table>
        <tr>
            <th>ID</th>
            <th>Tytuł</th>
            <th>Autor</th>
            <th>Status</th>
            <th>Akcja</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['tytul'] ?></td>
            <td><?= $row['autor'] ?></td>
            <td class="<?= $row['status'] == 'przeczytana' ? 'status-read' : 'status-not' ?>">
                <?= $row['status'] ?>
            </td>
            <td>
                <?php if ($row['status'] == 'do przeczytania'): ?>
                    <a class="btn-read" href="?przeczytana=<?= $row['id'] ?>">
                        Oznacz jako przeczytaną
                    </a>
                <?php else: ?>
                    ✔
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>

    </table>
</div>

</body>
</html>