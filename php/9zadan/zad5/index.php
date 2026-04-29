<?php
$conn = mysqli_connect("localhost", "root", "", "4fa_zadanka");

$kategoria = "";
if (isset($_GET['kategoria'])) {
    $kategoria = $_GET['kategoria'];
    $sql = "SELECT * FROM strony WHERE kategoria LIKE '%$kategoria%'";
} else {
    $sql = "SELECT * FROM strony";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista stron</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>📚 Lista stron internetowych</h1>

    <form method="GET">
        <label>Wpisz kategorię:</label>
        <input type="text" name="kategoria" value="<?php echo $kategoria; ?>" placeholder="np. nauka">
        <button type="submit">Szukaj</button>
    </form>

    <table>
        <tr>
            <th>Nazwa</th>
            <th>Link</th>
            <th>Kategoria</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['nazwa']; ?></td>
                <td>
                    <a href="<?php echo $row['link']; ?>" target="_blank">
                        <?php echo $row['link']; ?>
                    </a>
                </td>
                <td><?php echo $row['kategoria']; ?></td>
            </tr>
        <?php endwhile; ?>

    </table>
</div>

</body>
</html>

<?php
mysqli_close($conn);
?>