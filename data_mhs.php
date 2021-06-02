<?php

require 'functions.php';

$id = $_GET["id"];

$data_mhs = query("SELECT * FROM data_mhs WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h3 class="label">Tabel Mahasiswa</h3>
        <table class="table">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Domisili</th>
                <th>File</th>
            </tr>
            <?php $i = 0;
            foreach ($data_mhs as $row) {
                $i++; ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["nim"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["city"] ?></td>
                    <?php if (!$row['file']) { ?>
                        <td>Open</td>
                    <?php } else { ?>
                        <td><a href="files/<?= $row['file'] ?>">Open</a></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>

        <a href="index.php">Kembali</a>

        
    </div>

</body>

</html>