<?php

require 'functions.php';

$id = $_GET["id"];

$nilai_mhs = query("SELECT nilai_mhs.*, data_mhs.name, data_mhs.nim FROM nilai_mhs INNER JOIN data_mhs ON nilai_mhs.data_mhsID=data_mhs.id WHERE data_mhs.id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h3 class="label">Tabel Nilai</h3>
        <table class="table">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Semester 1</th>
                <th>Semester 2</th>
                <th>Semester 3</th>
                <th>Semester 4</th>
            </tr>
            <?php $i;
            foreach ($nilai_mhs as $row) {
                $i++; ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["nim"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["smt1"] ?></td>
                    <td><?= $row["smt2"] ?></td>
                    <td><?= $row["smt3"] ?></td>
                    <td><?= $row["smt4"] ?></td>
                </tr>
            <?php } ?>
        </table>

        <a href="index.php">Kembali</a>

        
    </div>

</body>

</html>