<?php
include 'koneksi.php';
$hello = "echo ";
$world = "raka";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
    <h1>Blog Sotgan Api</h1>
    <?php
    echo $hello . $world;
    ?>

    <button onclick="window.location.href='tabel.php'">Next Page</button>

</body>
</html>
